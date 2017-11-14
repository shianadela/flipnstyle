<?php

namespace flipnstyle\Http\Controllers;

use flipnstyle\User;

use flipnstyle\UserScrapbook;
use flipnstyle\UserScrapbookPage;
use flipnstyle\UserScrapbookPageElement;
use flipnstyle\UserSharedScrapbook;

use flipnstyle\UserThemeBackground;
use flipnstyle\UserThemeBorder;
use flipnstyle\UserThemeEmbellishment;


use flipnstyle\DesignerScrapbookTheme;
use flipnstyle\DesignerScrapbookThemeBackground;
use flipnstyle\DesignerScrapbookThemeBorder;
use flipnstyle\DesignerScrapbookThemeEmbellishment;

use Auth;
use Illuminate\Http\Request;
use flipnstyle\Http\Requests;
use flipnstyle\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index() {
    	return view('flipnstyle');
    }
    public function index_u(){
        return view('flipnstyle_u');
    }

    public function designerThemes(){
        $designerThemes = DesignerScrapbookTheme::get();

        return view('users.user-specialthemes', compact('designerThemes'));
    }

    public function previewDesignerThemes(Request $request){
        $designerid = $request->get('designerid');     
        $themeid = $request->get('themeid');

        $designerThemes = DesignerScrapbookTheme::where('designer_id', $designerid)->get();   

        return view('users.user-previewspecialthemes', compact('designerThemes', 'themeid', 'designerid'));
    }

    public function workspace(Request $request){
        $themeid = $request->get('themeid');
        $price = $request->get('price');
        
        $BG_list = UserThemeBackground::get();
        $BD_list = UserThemeBorder::get(); 
        $EM_list = UserThemeEmbellishment::get(); 

        $BG = UserThemeBackground::where('user_themeid', $themeid)->get();
        $BD = UserThemeBorder::where('user_themeid', $themeid)->get();   
        $EM = UserThemeEmbellishment::where('user_themeid', $themeid)->get();   
		
        return view('workspace.workspace-workspace', compact('price', 'themeid', 'BG', 'BD', 'EM', 'BG_list', 'BD_list', 'EM_list'));
	}

    public function showSpecialworkspace(Request $request){
        
        $themeid = $request->get('themeid');
        $price = $request->get('price');

        $BG_list = UserThemeBackground::get();
        $BD_list = UserThemeBorder::get(); 
        $EM_list = UserThemeEmbellishment::get(); 

        $BG = DesignerScrapbookThemeBackground::where('designer_themeid', $themeid)->get();
        $BD = DesignerScrapbookThemeBorder::where('designer_themeid', $themeid)->get();   
        $EM = DesignerScrapbookThemeEmbellishment::where('designer_themeid', $themeid)->get();   

        return view('workspace.workspace-specialthemeworkspace', compact('price', 'themeid', 'BG', 'BD', 'EM', 'BG_list', 'BD_list', 'EM_list'));
    }

    public function showEditworkspace(Request $request){
        
        $scrapid = $request->get('scrapid');  
        $themeid = $request->get('themeid');
        // $price = $request->get('price');        
        $height = $request->get('height');    
        $width = $request->get('width');    


        $BG_list = UserThemeBackground::get();
        $BD_list = UserThemeBorder::get(); 
        $EM_list = UserThemeEmbellishment::get();

        $edit_scrapbook = UserScrapbook::where('user_scrapbookid', $scrapid)->get(); 
        $edit_scrapbookpage = UserScrapbookPage::where('user_scrapbookid', $scrapid)->get();
        $edit_scrapbookpageelement = UserScrapbookPageElement::where('user_scrapbookid', $scrapid)->get();


        foreach ($edit_scrapbookpage as $savedpages) {
            $lastpage = $savedpages->user_scrapbookpagenumber;
        }

        if ( DesignerScrapbookThemeBackground::where('designer_themeid', $themeid)->exists()){
            $get_themeBG = DesignerScrapbookThemeBackground::where('designer_themeid', $themeid)->get();
            $get_themeBD = DesignerScrapbookThemeBorder::where('designer_themeid', $themeid)->get();   
            $get_themeEM = DesignerScrapbookThemeEmbellishment::where('designer_themeid', $themeid)->get();  
            $src = "designer"; 
        }

        else if (UserThemeBackground::where('user_themeid', $themeid)->exists()){
            $get_themeBG = UserThemeBackground::where('user_themeid', $themeid)->get();
            $get_themeBD = UserThemeBorder::where('user_themeid', $themeid)->get();   
            $get_themeEM = UserThemeEmbellishment::where('user_themeid', $themeid)->get(); 
            $src = "user"; 
        }

        return view('workspace.workspace-editworkspace', compact('themeid', 'scrapid', 'src',
            'edit_scrapbook', 'edit_scrapbookpage', 'edit_scrapbookpageelement', 
            'BG_list', 'BD_list', 'EM_list',
            'get_themeBG', 'get_themeBD', 'get_themeEM',
            'height', 'width', 'src','lastpage'
            ));
    }

    public function showPurchasescrapbook(Request $request){

        $scrapid = $request->get('scrapid');
        $price = $request->get('price');
        $themeid = $request->get('themeid');

        $getdesignerid = DesignerScrapbookTheme::where('designer_themeid', $themeid)->get();

        $getid = DesignerScrapbookTheme::where('designer_themeid', $themeid)->first();


        
        if( is_null($getid) ){
            $getSystemTheme = UserThemeBackground::where('user_themeid', $themeid)->get();
            foreach ($getSystemTheme as $gSt) {
                $designerid = "2013007952";         
            }
        }

        else{
            foreach ($getdesignerid as $did) {
                $designerid = $did->designer_id; 
            }
        }

        $scrapbookDetails = UserScrapbook::where('user_scrapbookid', $scrapid)->get();
        $scrapbookPages = UserScrapbookPage::where('user_scrapbookid', $scrapid)->get();
        $scrapbookPageElements = UserScrapbookPageElement::where('user_scrapbookid', $scrapid)->get();


        foreach ($scrapbookDetails as $details) {
            $scrapbookTitle = $details->user_scrapbooktitle;
             $logged = User::where('id', $details->user_id)->get();
                    foreach ($logged as $log) {
                        $logged_id = $log->id;
                        $firstname = $log->first_name;
                        $lastname = $log->last_name;
                    }
        }

        foreach ($scrapbookDetails as $pageHeight) {
            $scrapbookHeight = $pageHeight->user_pageHeight;
        }
        
        return view('users.user-purchasescrapbook', compact('designerid', 'themeid', 'scrapbookHeight', 'price','scrapbookTitle', 'scrapid', 'scrapbookDetails', 'scrapbookPages', 
                                                        'scrapbookPageElements', 'logged_id', 'firstname', 'lastname'));
    }

    public function dashboard(){

        $userid = Auth::user()->id;
        
        $shared = UserSharedScrapbook::where('user_scrapbookauthorcoauthor', $userid)->get();
            
            return view('users.user-dashboard', compact('shared'));
    }
}
