<?php

namespace flipnstyle\Http\Controllers;

use flipnstyle\Admin;
use flipnstyle\Purchase;
use flipnstyle\Designer;
use flipnstyle\DesignerScrapbookTheme;
use flipnstyle\DesignerScrapbookThemeBackground;
use flipnstyle\DesignerScrapbookThemeBorder;
use flipnstyle\DesignerScrapbookThemeEmbellishment;

use Illuminate\Http\Request;
use flipnstyle\Http\Requests;

class AdminController extends Controller
{
    protected $table = 'admins';

    public function showLogin(){
        return view('admin.admin-login');        
    }

    public function showIndex(){
        return view('admin.admin-dashboard');        
    }

    public function showReview(Request $request){
        $themeid = $request->get('themeid');
        return view('admin.admin-review', compact('themeid'));        
    }

    public function showTheme(Request $request){
        $themeid = $request->get('themeid');
        return view('admin.admin-viewtheme', compact('themeid'));        
    }


    public function showDashboard(Request $request)
    {
        $adminid = $request->get('adminid');
        $adminpassword = $request->get('password');

        $adminLogin = Admin::where('adminid', $adminid)
                                ->where('password', $adminpassword)
                                ->first();
            if (!$adminLogin) {
            }

            else{
                return view('admin.admin-dashboard');        
            }                           
    }

    public function showSubmissions(){

        $submissionList = DesignerScrapbookTheme::get();        

        return view('admin.admin-submissions', compact('submissionList') );
    }


    public function showPurchases(){


        $purchaseList = Purchase::get();
        
        return view('admin.admin-purchases', compact('purchaseList'));
    }

    public function updateStatusApproved(Request $request){

        $themeid = $request->themeid;

        $update = DesignerScrapbookTheme::where('designer_themeid', $themeid)->first();
        $update->status = "Approved";
        $update->save(); 

        $updateBG = DesignerScrapbookThemeBackground::where('designer_themeid', $themeid)->get();
        $updateBD = DesignerScrapbookThemeBorder::where('designer_themeid', $themeid)->get();
        $updateEM = DesignerScrapbookThemeEmbellishment::where('designer_themeid', $themeid)->get();

        foreach ($updateBG as $eBG) {
            $eBG->designer_elementstatus = "Approved";
            $eBG->save(); 
        }

        foreach ($updateBD as $eBD) {
            $eBD->designer_elementstatus = "Approved";
            $eBD->save(); 
        }

        foreach ($updateEM as $eEM) {
            $eEM->designer_elementstatus = "Approved";
            $eEM->save(); 
        }

        $data = array('status' => 'ok', 'url' => 'submissions' ); 

        return response()->json($data); 
    }

    public function updateStatusOnHold(Request $request){

        $themeid = $request->themeid;

        $update = DesignerScrapbookTheme::where('designer_themeid', $themeid)->get();
            foreach ($update as $u) {
                $u->status = "On Hold";
                $u->save(); 
            }

        $data = array('status' => 'ok', 'url' => 'submissions' ); 

        return response()->json($data); 
    }
}
