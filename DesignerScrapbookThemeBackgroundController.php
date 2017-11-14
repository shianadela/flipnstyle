<?php

namespace flipnstyle\Http\Controllers;

use Illuminate\Http\Request;

use flipnstyle\Http\Requests;

use flipnstyle\DesignerScrapbookThemeBackground;

use flipnstyle\files;

use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Support\Facades\Input;

class DesignerScrapbookThemeBackgroundController extends Controller
{
	protected $table = 'designer_scrapbookthemebackgrounds';

	public function updateBGStatus(Request $request){
		// BACKGROUND STATUS VARIABLES
	    	$BG1 = $request->BG1;
	    	$BG2 = $request->BG2;    	
	    	$BG3 = $request->BG3;
	    	$BG4 = $request->BG4;
	    	$BG5 = $request->BG5;
	    	$BG6 = $request->BG6;
	    	$BG7 = $request->BG7;
	    	$BG8 = $request->BG8;
	    	$BG9 = $request->BG9;
	    	$BG10 = $request->BG10;
	    // BACKGROUND STATUS VARIABLES		

	    // BACKGROUND ID VARIABLES
	    	$idBG1 = $request->idBG1;
	    	$idBG2 = $request->idBG2;    	
	    	$idBG3 = $request->idBG3;
	    	$idBG4 = $request->idBG4;
	    	$idBG5 = $request->idBG5;
	    	$idBG6 = $request->idBG6;
	    	$idBG7 = $request->idBG7;
	    	$idBG8 = $request->idBG8;
	    	$idBG9 = $request->idBG9;
	    	$idBG10 = $request->idBG10;
	    // BACKGROUND ID VARIABLES	

	    	$update_status1 = DesignerScrapbookThemeBackground::where('designer_themebackgroundid', $idBG1)->first();
		 	$update_status1->designer_elementstatus = $BG1;
			$update_status1->save();

			$update_status2 = DesignerScrapbookThemeBackground::where('designer_themebackgroundid', $idBG2)->first();
		 	$update_status2->designer_elementstatus = $BG2;
			$update_status2->save();

			$update_status3 = DesignerScrapbookThemeBackground::where('designer_themebackgroundid', $idBG3)->first();
		 	$update_status3->designer_elementstatus = $BG3;
			$update_status3->save();

			$update_status4 = DesignerScrapbookThemeBackground::where('designer_themebackgroundid', $idBG4)->first();
		 	$update_status4->designer_elementstatus = $BG4;
			$update_status4->save();
			
			$update_status5 = DesignerScrapbookThemeBackground::where('designer_themebackgroundid', $idBG5)->first();
		 	$update_status5->designer_elementstatus = $BG5;
			$update_status5->save();
	
			$update_status6 = DesignerScrapbookThemeBackground::where('designer_themebackgroundid', $idBG6)->first();
		 	$update_status6->designer_elementstatus = $BG6;
			$update_status6->save();

			$update_status7 = DesignerScrapbookThemeBackground::where('designer_themebackgroundid', $idBG7)->first();
		 	$update_status7->designer_elementstatus = $BG7;
			$update_status7->save();

			$update_status8 = DesignerScrapbookThemeBackground::where('designer_themebackgroundid', $idBG8)->first();
		 	$update_status8->designer_elementstatus = $BG8;
			$update_status8->save();

			$update_status9 = DesignerScrapbookThemeBackground::where('designer_themebackgroundid', $idBG9)->first();
		 	$update_status9->designer_elementstatus = $BG9;
			$update_status9->save();

			$update_status10 = DesignerScrapbookThemeBackground::where('designer_themebackgroundid', $idBG10)->first();
		 	$update_status10->designer_elementstatus = $BG10;
			$update_status10->save();
	}

	public function storeDesignerThemesBG(Request $request){
		$id = $request->theme_id;

	    // BACKGROUND VARIABLES
	    	$bg1 = $request->themes_bg1;
	    	$bg2 = $request->themes_bg2;    	
	    	$bg3 = $request->themes_bg3;
	    	$bg4 = $request->themes_bg4;
	    	$bg5 = $request->themes_bg5;
	    	$bg6 = $request->themes_bg6;
	    	$bg7 = $request->themes_bg7;
	    	$bg8 = $request->themes_bg8;
	    	$bg9 = $request->themes_bg9;
	    	$bg10 = $request->themes_bg10;
	    // BACKGROUND VARIABLES

	    // PATH 466X749
	     $l_bg1 ="img/designer_themes/466x749/background/".$bg1;
	     $l_bg2 ="img/designer_themes/466x749/background/".$bg2; 
	     $l_bg3 ="img/designer_themes/466x749/background/".$bg3; 
	     $l_bg4 ="img/designer_themes/466x749/background/".$bg4; 
	     $l_bg5 ="img/designer_themes/466x749/background/".$bg5; 
	     $l_bg6 ="img/designer_themes/466x749/background/".$bg6; 
	     $l_bg7 ="img/designer_themes/466x749/background/".$bg7; 
	     $l_bg8 ="img/designer_themes/466x749/background/".$bg8; 
	     $l_bg9 ="img/designer_themes/466x749/background/".$bg9; 
	     $l_bg10 ="img/designer_themes/466x749/background/".$bg10; 
	    // PATH 466X749


	    // PATH 466X749
	     $p_bg1 ="img/designer_themes/749x505/background/".$bg1;
	     $p_bg2 ="img/designer_themes/749x505/background/".$bg2; 
	     $p_bg3 ="img/designer_themes/749x505/background/".$bg3; 
	     $p_bg4 ="img/designer_themes/749x505/background/".$bg4; 
	     $p_bg5 ="img/designer_themes/749x505/background/".$bg5; 
	     $p_bg6 ="img/designer_themes/749x505/background/".$bg6; 
	     $p_bg7 ="img/designer_themes/749x505/background/".$bg7; 
	     $p_bg8 ="img/designer_themes/749x505/background/".$bg8; 
	     $p_bg9 ="img/designer_themes/749x505/background/".$bg9; 
	     $p_bg10 ="img/designer_themes/749x505/background/".$bg10; 
	    // PATH 466X749

	      
		// SAVE BG (LANDSCAPE PATH)
	    	$l_newbg1 = new DesignerScrapbookThemeBackground;
		 	$l_newbg1->designer_themeid = $id;
			$l_newbg1->designer_themebackgroundsrc = $l_bg1; 
			$l_newbg1->designer_elementstatus = "Pending"; 
			$l_newbg1->save();
			
			$l_newbg2 = new DesignerScrapbookThemeBackground;
		 	$l_newbg2->designer_themeid = $id;
			$l_newbg2->designer_themebackgroundsrc = $l_bg2; 
			$l_newbg2->designer_elementstatus = "Pending"; 
			$l_newbg2->save();
			
			$l_newbg3 = new DesignerScrapbookThemeBackground;
		 	$l_newbg3->designer_themeid = $id;
			$l_newbg3->designer_themebackgroundsrc = $l_bg3;
			$l_newbg3->designer_elementstatus = "Pending";  
			$l_newbg3->save();
			
			$l_newbg4 = new DesignerScrapbookThemeBackground;
		 	$l_newbg4->designer_themeid = $id;
			$l_newbg4->designer_themebackgroundsrc = $l_bg4; 
			$l_newbg4->designer_elementstatus = "Pending"; 
			$l_newbg4->save();

			$l_newbg5 = new DesignerScrapbookThemeBackground;
		 	$l_newbg5->designer_themeid = $id;
			$l_newbg5->designer_themebackgroundsrc = $l_bg5; 
			$l_newbg5->designer_elementstatus = "Pending"; 
			$l_newbg5->save();
			
			$l_newbg6 = new DesignerScrapbookThemeBackground;
		 	$l_newbg6->designer_themeid = $id;
			$l_newbg6->designer_themebackgroundsrc = $l_bg6; 
			$l_newbg6->designer_elementstatus = "Pending"; 
			$l_newbg6->save();
			
			$l_newbg7 = new DesignerScrapbookThemeBackground;
		 	$l_newbg7->designer_themeid = $id;
			$l_newbg7->designer_themebackgroundsrc = $l_bg7; 
			$l_newbg7->designer_elementstatus = "Pending"; 
			$l_newbg7->save();
			
			$l_newbg8 = new DesignerScrapbookThemeBackground;
		 	$l_newbg8->designer_themeid = $id;
			$l_newbg8->designer_themebackgroundsrc = $l_bg8; 
			$l_newbg8->designer_elementstatus = "Pending"; 
			$l_newbg8->save();

			$l_newbg9 = new DesignerScrapbookThemeBackground;
		 	$l_newbg9->designer_themeid = $id;
			$l_newbg9->designer_themebackgroundsrc = $l_bg9; 
			$l_newbg9->designer_elementstatus = "Pending"; 
			$l_newbg9->save();
			
			$l_newbg10 = new DesignerScrapbookThemeBackground;
		 	$l_newbg10->designer_themeid = $id;
			$l_newbg10->designer_themebackgroundsrc = $l_bg10; 
			$l_newbg10->designer_elementstatus = "Pending"; 
			$l_newbg10->save();
		// SAVE BG (LANDSCAPE PATH)

		// SAVE BG (LANDSCAPE PATH)
	    	$p_newbg1 = new DesignerScrapbookThemeBackground;
		 	$p_newbg1->designer_themeid = $id;
			$p_newbg1->designer_themebackgroundsrc = $p_bg1; 
			$p_newbg1->designer_elementstatus = "Pending"; 
			$p_newbg1->save();
			
			$p_newbg2 = new DesignerScrapbookThemeBackground;
		 	$p_newbg2->designer_themeid = $id;
			$p_newbg2->designer_themebackgroundsrc = $p_bg2; 
			$p_newbg2->designer_elementstatus = "Pending"; 
			$p_newbg2->save();
			
			$p_newbg3 = new DesignerScrapbookThemeBackground;
		 	$p_newbg3->designer_themeid = $id;
			$p_newbg3->designer_themebackgroundsrc = $p_bg3; 
			$p_newbg3->designer_elementstatus = "Pending"; 
			$p_newbg3->save();
			
			$p_newbg4 = new DesignerScrapbookThemeBackground;
		 	$p_newbg4->designer_themeid = $id;
			$p_newbg4->designer_themebackgroundsrc = $p_bg4; 
			$p_newbg4->designer_elementstatus = "Pending"; 
			$p_newbg4->save();

			$p_newbg5 = new DesignerScrapbookThemeBackground;
		 	$p_newbg5->designer_themeid = $id;
			$p_newbg5->designer_themebackgroundsrc = $p_bg5; 
			$p_newbg5->designer_elementstatus = "Pending"; 
			$p_newbg5->save();
			
			$p_newbg6 = new DesignerScrapbookThemeBackground;
		 	$p_newbg6->designer_themeid = $id;
			$p_newbg6->designer_themebackgroundsrc = $p_bg6; 
			$p_newbg6->designer_elementstatus = "Pending"; 
			$p_newbg6->save();
			
			$p_newbg7 = new DesignerScrapbookThemeBackground;
		 	$p_newbg7->designer_themeid = $id;
			$p_newbg7->designer_themebackgroundsrc = $p_bg7; 
			$p_newbg7->designer_elementstatus = "Pending"; 
			$p_newbg7->save();
			
			$p_newbg8 = new DesignerScrapbookThemeBackground;
		 	$p_newbg8->designer_themeid = $id;
			$p_newbg8->designer_themebackgroundsrc = $p_bg8; 
			$p_newbg8->designer_elementstatus = "Pending"; 
			$p_newbg8->save();

			$p_newbg9 = new DesignerScrapbookThemeBackground;
		 	$p_newbg9->designer_themeid = $id;
			$p_newbg9->designer_themebackgroundsrc = $p_bg9; 
			$p_newbg9->designer_elementstatus = "Pending"; 
			$p_newbg9->save();
			
			$p_newbg10 = new DesignerScrapbookThemeBackground;
		 	$p_newbg10->designer_themeid = $id;
			$p_newbg10->designer_themebackgroundsrc = $p_bg10; 
			$p_newbg10->designer_elementstatus = "Pending"; 
			$p_newbg10->save();
		// SAVE BG (LANDSCAPE PATH)
	}

	public function storeDesignerThemesBG_public(Request $request){
    	if ($request->hasFile('designerBackground')){
			
			$image = $request->file('designerBackground');

			$filename = $image->getClientOriginalName();

	        $P_image_resize = Image::make($image->getRealPath());              
    		$P_image_resize->resize(505, 749);
	        $P_image_resize->save(public_path('/img/designer_themes/749x505/background/' .$filename));

	        $L_image_resize = Image::make($image->getRealPath());              
    		$L_image_resize->resize(749, 466);
	        $L_image_resize->save(public_path('/img/designer_themes/466x749/background/' .$filename));
	    }
    }

	public function updateBG(Request $request){
	    $themeid = $request->themeid;
	    $themebgid = $request->themebgid;
	    $src = $request->src;
	    $status = "Pending";
	    
	    $srcLandscape = "img/designer_themes/466x749/background/".$src;
	    $srcPortrait = "img/designer_themes/749x505/background/".$src;
	    
	    $updateAsset = DesignerScrapbookThemeBackground::where('designer_themebackgroundid', $themebgid)->first();
	    $updateAsset->designer_themebackgroundsrc = $srcLandscape;
	    $updateAsset->designer_elementstatus = $status;
        $updateAsset->save(); 

    }
}
