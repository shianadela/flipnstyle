<?php

namespace flipnstyle\Http\Controllers;

use flipnstyle\DesignerScrapbookTheme;
use flipnstyle\DesignerScrapbookThemeBackground;
use flipnstyle\DesignerScrapbookThemeBorder;
use flipnstyle\DesignerScrapbookThemeEmbellishment;
use flipnstyle\Designer;
use flipnstyle\Purchase;



use Illuminate\Http\Request;
use flipnstyle\Http\Requests;
use Illuminate\Support\Facades\Input;

use flipnstyle\Http\Controllers\Controller;

use View;

class DesignerController extends Controller
{
    protected $table = 'designers';

    public function showLogin(){
        return view('designer.designer-login');
    }

	public function postLogin(Request $request)
    {
        $designerid = $request->get('designerid');
        $designerpassword = $request->get('password');

        $designerLogin = Designer::where('designerid', $designerid)
                                ->where('password', $designerpassword)
                                ->first();
            if (!$designerLogin) {
            }

            else{
                return view('designer.designer-index', compact('designerid'));
            }                                
    }

    public function showTheme(Request $request){
        $themeid = $request->get('themeid');
        $logged_id = $request->get('designerid');
        return view('designer.designer-viewthemes', compact('logged_id','themeid'));        
    }

    public function index(Request $request){
        $designerid = $request->get('designerid');
        return view('designer.designer-index', compact('designerid'));
    }

    public function notifications(Request $request){
        $designerid = $request->get('designerid');

        $purchases = Purchase::where('designerid', $designerid)->get();
        $onholds = DesignerScrapbookTheme::where('designer_id', $designerid)->get();

        foreach ($onholds as $onhold) {
            $onholdthemeid = $onhold->designer_themeid;
        }
        
        $onholdBG = DesignerScrapbookThemeBackground::where('designer_themeid', $onholdthemeid)->get(); 
        $onholdBD = DesignerScrapbookThemeBorder::where('designer_themeid', $onholdthemeid)->get(); 
        $onholdEM = DesignerScrapbookThemeEmbellishment::where('designer_themeid', $onholdthemeid)->get(); 
        
        return view('designer.designer-notifications', 
            compact('designerid', 'purchases', 'onholdBG', 'onholdBD', 'onholdEM', 'onholds'));
    }

    public function changeUpload(Request $request){
        $designerid = $request->get('designerid');
        $themeid = $request->get('themeid');
        $purchases = Purchase::where('designerid', $designerid)->get();
        
        $onholdsid = DesignerScrapbookTheme::where('designer_themeid', $themeid)->get();

        $onholdBG = DesignerScrapbookThemeBackground::where('designer_themeid', $themeid)->get(); 
        $onholdBD = DesignerScrapbookThemeBorder::where('designer_themeid', $themeid)->get(); 
        $onholdEM = DesignerScrapbookThemeEmbellishment::where('designer_themeid', $themeid)->get(); 
        
        return view('designer.designer-changeupload', 
            compact('designerid', 'purchases', 'onholdBG', 'onholdBD', 'onholdEM', 'themeid', 'onholdsid'));
    }

    public function newsubmissions(Request $request){
        $designerid = $request->get('designerid');
        
        return view('designer.designer-newsubmissions', compact('designerid') );
    }

    public function pending(Request $request){
        $logged_id = $request->get('designerid');

        $pendingStatus = DesignerScrapbookTheme::where('designer_id', $logged_id)->get();        

        return view('designer.designer-pending', compact('pendingStatus' ,'logged_id') );
    }

    public function viewThemesList(Request $request){
        $logged_id = $request->get('designerid');
        $list = DesignerScrapbookTheme::where('designer_id', $logged_id)->get();        
        
        return view('designer.designer-lists', compact('list' ,'logged_id') );
    }

    public function lists(Request $request){
        $logged_id = $request->get('designerid');

        $list = DesignerScrapbookTheme::where('designer_id', $logged_id)->get();        

        return view('designer.designer-lists', compact('list' ,'logged_id') );
    }

}
