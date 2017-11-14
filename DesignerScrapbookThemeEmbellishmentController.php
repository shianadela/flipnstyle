<?php

namespace flipnstyle\Http\Controllers;

use Illuminate\Http\Request;

use flipnstyle\Http\Requests;

use flipnstyle\DesignerScrapbookThemeEmbellishment;

use flipnstyle\files;

use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Support\Facades\Input;


class DesignerScrapbookThemeEmbellishmentController extends Controller
{
	protected $table = 'designer_scrapbookthemeembellishments';

	public function updateEMStatus(Request $request){
		// EMBELLISHMENTS STATUS VARIABLES
	    	$EM1 = $request->EM1;
	    	$EM2 = $request->EM2;    	
	    	$EM3 = $request->EM3;
	    	$EM4 = $request->EM4;
	    	$EM5 = $request->EM5;
	    	$EM6 = $request->EM6;
	    	$EM7 = $request->EM7;
	    	$EM8 = $request->EM8;
	    	$EM9 = $request->EM9;
	    	$EM10 = $request->EM10;
	    // EMBELLISHMENTS STATUS VARIABLES		

	    // EMBELLISHMENTS ID VARIABLES
	    	$idEM1 = $request->idEM1;
	    	$idEM2 = $request->idEM2;    	
	    	$idEM3 = $request->idEM3;
	    	$idEM4 = $request->idEM4;
	    	$idEM5 = $request->idEM5;
	    	$idEM6 = $request->idEM6;
	    	$idEM7 = $request->idEM7;
	    	$idEM8 = $request->idEM8;
	    	$idEM9 = $request->idEM9;
	    	$idEM10 = $request->idEM10;
	    // EMBELLISHMENTS ID VARIABLES	

	    	$update_status1 = DesignerScrapbookThemeEmbellishment::where('designer_themeembellishmentid', $idEM1)->first();
		 	$update_status1->designer_elementstatus = $EM1;
			$update_status1->save();

			$update_status2 = DesignerScrapbookThemeEmbellishment::where('designer_themeembellishmentid', $idEM2)->first();
		 	$update_status2->designer_elementstatus = $EM2;
			$update_status2->save();

			$update_status3 = DesignerScrapbookThemeEmbellishment::where('designer_themeembellishmentid', $idEM3)->first();
		 	$update_status3->designer_elementstatus = $EM3;
			$update_status3->save();

			$update_status4 = DesignerScrapbookThemeEmbellishment::where('designer_themeembellishmentid', $idEM4)->first();
		 	$update_status4->designer_elementstatus = $EM4;
			$update_status4->save();
			
			$update_status5 = DesignerScrapbookThemeEmbellishment::where('designer_themeembellishmentid', $idEM5)->first();
		 	$update_status5->designer_elementstatus = $EM5;
			$update_status5->save();
	
			$update_status6 = DesignerScrapbookThemeEmbellishment::where('designer_themeembellishmentid', $idEM6)->first();
		 	$update_status6->designer_elementstatus = $EM6;
			$update_status6->save();

			$update_status7 = DesignerScrapbookThemeEmbellishment::where('designer_themeembellishmentid', $idEM7)->first();
		 	$update_status7->designer_elementstatus = $EM7;
			$update_status7->save();

			$update_status8 = DesignerScrapbookThemeEmbellishment::where('designer_themeembellishmentid', $idEM8)->first();
		 	$update_status8->designer_elementstatus = $EM8;
			$update_status8->save();

			$update_status9 = DesignerScrapbookThemeEmbellishment::where('designer_themeembellishmentid', $idEM9)->first();
		 	$update_status9->designer_elementstatus = $EM9;
			$update_status9->save();

			$update_status10 = DesignerScrapbookThemeEmbellishment::where('designer_themeembellishmentid', $idEM10)->first();
		 	$update_status10->designer_elementstatus = $EM10;
			$update_status10->save();
	}

    public function storeDesignerThemesEM(Request $request){
    	$id = $request->theme_id;

	    // BACKGROUND VARIABLES
	    	$em1 = $request->themes_em1;
	    	$em2 = $request->themes_em2;    	
	    	$em3 = $request->themes_em3;
	    	$em4 = $request->themes_em4;
	    	$em5 = $request->themes_em5;
	    	$em6 = $request->themes_em6;
	    	$em7 = $request->themes_em7;
	    	$em8 = $request->themes_em8;
	    	$em9 = $request->themes_em9;
	    	$em10 = $request->themes_em10;
	    // BACKGROUND VARIABLES

	    // PATH 466X749
	     $path_em1="img/designer_themes/embellishments/".$em1;
	     $path_em2 ="img/designer_themes/embellishments/".$em2; 
	     $path_em3 ="img/designer_themes/embellishments/".$em3; 
	     $path_em4 ="img/designer_themes/embellishments/".$em4; 
	     $path_em5 ="img/designer_themes/embellishments/".$em5; 
	     $path_em6 ="img/designer_themes/embellishments/".$em6; 
	     $path_em7 ="img/designer_themes/embellishments/".$em7; 
	     $path_em8 ="img/designer_themes/embellishments/".$em8; 
	     $path_em9 ="img/designer_themes/embellishments/".$em9; 
	     $path_em10 ="img/designer_themes/embellishments/".$em10; 
	    // PATH 466X749
	  
	    	$newem1 = new DesignerScrapbookThemeEmbellishment;
		 	$newem1->designer_themeid = $id;
			$newem1->designer_themeembellishmentsrc = $path_em1; 
			$newem1->designer_elementstatus = "Pending"; 
			$newem1->save();
			
			$newem2 = new DesignerScrapbookThemeEmbellishment;
		 	$newem2->designer_themeid = $id;
			$newem2->designer_themeembellishmentsrc = $path_em2;
			$newem2->designer_elementstatus = "Pending";  
			$newem2->save();
			
			$newem3 = new DesignerScrapbookThemeEmbellishment;
		 	$newem3->designer_themeid = $id;
			$newem3->designer_themeembellishmentsrc = $path_em3;
			$newem3->designer_elementstatus = "Pending";  
			$newem3->save();
			
			$newem4 = new DesignerScrapbookThemeEmbellishment;
		 	$newem4->designer_themeid = $id;
			$newem4->designer_themeembellishmentsrc = $path_em4;
			$newem4->designer_elementstatus = "Pending";  
			$newem4->save();

			$newem5 = new DesignerScrapbookThemeEmbellishment;
		 	$newem5->designer_themeid = $id;
			$newem5->designer_themeembellishmentsrc = $path_em5;
			$newem5->designer_elementstatus = "Pending";  
			$newem5->save();
			
			$newem6 = new DesignerScrapbookThemeEmbellishment;
		 	$newem6->designer_themeid = $id;
			$newem6->designer_themeembellishmentsrc = $path_em6;
			$newem6->designer_elementstatus = "Pending";  
			$newem6->save();
			
			$newem7 = new DesignerScrapbookThemeEmbellishment;
		 	$newem7->designer_themeid = $id;
			$newem7->designer_themeembellishmentsrc = $path_em7;
			$newem7->designer_elementstatus = "Pending";  
			$newem7->save();
			
			$newem8 = new DesignerScrapbookThemeEmbellishment;
		 	$newem8->designer_themeid = $id;
			$newem8->designer_themeembellishmentsrc = $path_em8;
			$newem8->designer_elementstatus = "Pending";  
			$newem8->save();

			$newem9 = new DesignerScrapbookThemeEmbellishment;
		 	$newem9->designer_themeid = $id;
			$newem9->designer_themeembellishmentsrc = $path_em9;
			$newem9->designer_elementstatus = "Pending";  
			$newem9->save();
			
			$newem10 = new DesignerScrapbookThemeEmbellishment;
		 	$newem10->designer_themeid = $id;
			$newem10->designer_themeembellishmentsrc = $path_em10;
			$newem10->designer_elementstatus = "Pending";  
			$newem10->save();
	}

    public function storeDesignerThemesEM_public(Request $request){
     if ($request->hasFile('designerEmbellishment')){
			
			$image = $request->file('designerEmbellishment');

			$filename = $image->getClientOriginalName();

	        $image_resize = Image::make($image->getRealPath());              
    		$image_resize->resize(175, 200);
	        $image_resize->save(public_path('/img/designer_themes/embellishments/' .$filename));

	    }
    }

    public function updateEM(Request $request){
	    $themeid = $request->themeid;
	    $themebgid = $request->themebgid;
	    $src = $request->src;
	    $status = "Pending";
	    
	    $srcALL = "img/designer_themes/embellishments/".$src;
	    
	    $updateAsset = DesignerScrapbookThemeEmbellishment::where('designer_themeembellishmentid', $themebgid)->first();
	    $updateAsset->designer_themeembellishmentsrc = $srcALL;
	    $updateAsset->designer_elementstatus = $status;
        $updateAsset->save(); 
    }

}

