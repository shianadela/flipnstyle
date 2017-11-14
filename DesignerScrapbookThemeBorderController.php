<?php

namespace flipnstyle\Http\Controllers;

use Illuminate\Http\Request;

use flipnstyle\Http\Requests;

use flipnstyle\files;

use flipnstyle\DesignerScrapbookThemeBorder;

use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Support\Facades\Input;


class DesignerScrapbookThemeBorderController extends Controller
{
	protected $table = 'designer_scrapbookthemeborders';
	
	public function updateBDStatus(Request $request){
		// BORDER STATUS VARIABLES
	    	$BD1 = $request->BD1;
	    	$BD2 = $request->BD2;    	
	    	$BD3 = $request->BD3;
	    	$BD4 = $request->BD4;
	    	$BD5 = $request->BD5;
	    	$BD6 = $request->BD6;
	    	$BD7 = $request->BD7;
	    	$BD8 = $request->BD8;
	    	$BD9 = $request->BD9;
	    	$BD10 = $request->BD10;
	    // BORDER STATUS VARIABLES		

	    // BORDER ID VARIABLES
	    	$idBD1 = $request->idBD1;
	    	$idBD2 = $request->idBD2;    	
	    	$idBD3 = $request->idBD3;
	    	$idBD4 = $request->idBD4;
	    	$idBD5 = $request->idBD5;
	    	$idBD6 = $request->idBD6;
	    	$idBD7 = $request->idBD7;
	    	$idBD8 = $request->idBD8;
	    	$idBD9 = $request->idBD9;
	    	$idBD10 = $request->idBD10;
	    // BORDER ID VARIABLES	

	    	$update_status1 = DesignerScrapbookThemeBorder::where('designer_themeborderid', $idBD1)->first();
		 	$update_status1->designer_elementstatus = $BD1;
			$update_status1->save();

			$update_status2 = DesignerScrapbookThemeBorder::where('designer_themeborderid', $idBD2)->first();
		 	$update_status2->designer_elementstatus = $BD2;
			$update_status2->save();

			$update_status3 = DesignerScrapbookThemeBorder::where('designer_themeborderid', $idBD3)->first();
		 	$update_status3->designer_elementstatus = $BD3;
			$update_status3->save();

			$update_status4 = DesignerScrapbookThemeBorder::where('designer_themeborderid', $idBD4)->first();
		 	$update_status4->designer_elementstatus = $BD4;
			$update_status4->save();
			
			$update_status5 = DesignerScrapbookThemeBorder::where('designer_themeborderid', $idBD5)->first();
		 	$update_status5->designer_elementstatus = $BD5;
			$update_status5->save();
	
			$update_status6 = DesignerScrapbookThemeBorder::where('designer_themeborderid', $idBD6)->first();
		 	$update_status6->designer_elementstatus = $BD6;
			$update_status6->save();

			$update_status7 = DesignerScrapbookThemeBorder::where('designer_themeborderid', $idBD7)->first();
		 	$update_status7->designer_elementstatus = $BD7;
			$update_status7->save();

			$update_status8 = DesignerScrapbookThemeBorder::where('designer_themeborderid', $idBD8)->first();
		 	$update_status8->designer_elementstatus = $BD8;
			$update_status8->save();

			$update_status9 = DesignerScrapbookThemeBorder::where('designer_themeborderid', $idBD9)->first();
		 	$update_status9->designer_elementstatus = $BD9;
			$update_status9->save();

			$update_status10 = DesignerScrapbookThemeBorder::where('designer_themeborderid', $idBD10)->first();
		 	$update_status10->designer_elementstatus = $BD10;
			$update_status10->save();
	}

    public function storeDesignerThemesBD(Request $request){
    	$id = $request->theme_id;

	    // BACKGROUND VARIABLES
	    	$bd1 = $request->themes_bd1;
	    	$bd2 = $request->themes_bd2;    	
	    	$bd3 = $request->themes_bd3;
	    	$bd4 = $request->themes_bd4;
	    	$bd5 = $request->themes_bd5;
	    	$bd6 = $request->themes_bd6;
	    	$bd7 = $request->themes_bd7;
	    	$bd8 = $request->themes_bd8;
	    	$bd9 = $request->themes_bd9;
	    	$bd10 = $request->themes_bd10;
	    // BACKGROUND VARIABLES

	    // PATH 466X749
	     $l_bd1 ="img/designer_themes/466x749/border/".$bd1;
	     $l_bd2 ="img/designer_themes/466x749/border/".$bd2; 
	     $l_bd3 ="img/designer_themes/466x749/border/".$bd3; 
	     $l_bd4 ="img/designer_themes/466x749/border/".$bd4; 
	     $l_bd5 ="img/designer_themes/466x749/border/".$bd5; 
	     $l_bd6 ="img/designer_themes/466x749/border/".$bd6; 
	     $l_bd7 ="img/designer_themes/466x749/border/".$bd7; 
	     $l_bd8 ="img/designer_themes/466x749/border/".$bd8; 
	     $l_bd9 ="img/designer_themes/466x749/border/".$bd9; 
	     $l_bd10 ="img/designer_themes/466x749/border/".$bd10; 
	    // PATH 466X749


	    // PATH 466X749
	     $p_bd1 ="img/designer_themes/749x505/border/".$bd1;
	     $p_bd2 ="img/designer_themes/749x505/border/".$bd2; 
	     $p_bd3 ="img/designer_themes/749x505/border/".$bd3; 
	     $p_bd4 ="img/designer_themes/749x505/border/".$bd4; 
	     $p_bd5 ="img/designer_themes/749x505/border/".$bd5; 
	     $p_bd6 ="img/designer_themes/749x505/border/".$bd6; 
	     $p_bd7 ="img/designer_themes/749x505/border/".$bd7; 
	     $p_bd8 ="img/designer_themes/749x505/border/".$bd8; 
	     $p_bd9 ="img/designer_themes/749x505/border/".$bd9; 
	     $p_bd10 ="img/designer_themes/749x505/border/".$bd10; 
	    // PATH 466X749

	      
		// SAVE Bd (LANDSCAPE PATH)
	    	$l_newbd1 = new DesignerScrapbookThemeBorder;
		 	$l_newbd1->designer_themeid = $id;
			$l_newbd1->designer_themebordersrc = $l_bd1; 
			$l_newbd1->designer_elementstatus = "Pending"; 
			$l_newbd1->save();
			
			$l_newbd2 = new DesignerScrapbookThemeBorder;
		 	$l_newbd2->designer_themeid = $id;
			$l_newbd2->designer_themebordersrc = $l_bd2; 
			$l_newbd2->designer_elementstatus = "Pending"; 
			$l_newbd2->save();
			
			$l_newbd3 = new DesignerScrapbookThemeBorder;
		 	$l_newbd3->designer_themeid = $id;
			$l_newbd3->designer_themebordersrc = $l_bd3; 
			$l_newbd3->designer_elementstatus = "Pending"; 
			$l_newbd3->save();
			
			$l_newbd4 = new DesignerScrapbookThemeBorder;
		 	$l_newbd4->designer_themeid = $id;
			$l_newbd4->designer_themebordersrc = $l_bd4;
			$l_newbd4->designer_elementstatus = "Pending";  
			$l_newbd4->save();

			$l_newbd5 = new DesignerScrapbookThemeBorder;
		 	$l_newbd5->designer_themeid = $id;
			$l_newbd5->designer_themebordersrc = $l_bd5;
			$l_newbd5->designer_elementstatus = "Pending";  
			$l_newbd5->save();
			
			$l_newbd6 = new DesignerScrapbookThemeBorder;
		 	$l_newbd6->designer_themeid = $id;
			$l_newbd6->designer_themebordersrc = $l_bd6;
			$l_newbd6->designer_elementstatus = "Pending";  
			$l_newbd6->save();
			
			$l_newbd7 = new DesignerScrapbookThemeBorder;
		 	$l_newbd7->designer_themeid = $id;
			$l_newbd7->designer_themebordersrc = $l_bd7;
			$l_newbd7->designer_elementstatus = "Pending";  
			$l_newbd7->save();
			
			$l_newbd8 = new DesignerScrapbookThemeBorder;
		 	$l_newbd8->designer_themeid = $id;
			$l_newbd8->designer_themebordersrc = $l_bd8;
			$l_newbd8->designer_elementstatus = "Pending";  
			$l_newbd8->save();

			$l_newbd9 = new DesignerScrapbookThemeBorder;
		 	$l_newbd9->designer_themeid = $id;
			$l_newbd9->designer_themebordersrc = $l_bd9;
			$l_newbd9->designer_elementstatus = "Pending";  
			$l_newbd9->save();
			
			$l_newbd10 = new DesignerScrapbookThemeBorder;
		 	$l_newbd10->designer_themeid = $id;
			$l_newbd10->designer_themebordersrc = $l_bd10;
			$l_newbd10->designer_elementstatus = "Pending";  
			$l_newbd10->save();
		// SAVE Bd (LANDSCAPE PATH)

		// SAVE Bd (LANDSCAPE PATH)
	    	$p_newbd1 = new DesignerScrapbookThemeBorder;
		 	$p_newbd1->designer_themeid = $id;
			$p_newbd1->designer_themebordersrc = $p_bd1;
			$p_newbd1->designer_elementstatus = "Pending";  
			$p_newbd1->save();
			
			$p_newbd2 = new DesignerScrapbookThemeBorder;
		 	$p_newbd2->designer_themeid = $id;
			$p_newbd2->designer_themebordersrc = $p_bd2;
			$p_newbd2->designer_elementstatus = "Pending";   
			$p_newbd2->save();
			
			$p_newbd3 = new DesignerScrapbookThemeBorder;
		 	$p_newbd3->designer_themeid = $id;
			$p_newbd3->designer_themebordersrc = $p_bd3;
			$p_newbd3->designer_elementstatus = "Pending";   
			$p_newbd3->save();
			
			$p_newbd4 = new DesignerScrapbookThemeBorder;
		 	$p_newbd4->designer_themeid = $id;
			$p_newbd4->designer_themebordersrc = $p_bd4;
			$p_newbd4->designer_elementstatus = "Pending";   
			$p_newbd4->save();

			$p_newbd5 = new DesignerScrapbookThemeBorder;
		 	$p_newbd5->designer_themeid = $id;
			$p_newbd5->designer_themebordersrc = $p_bd5;
			$p_newbd5->designer_elementstatus = "Pending";   
			$p_newbd5->save();
			
			$p_newbd6 = new DesignerScrapbookThemeBorder;
		 	$p_newbd6->designer_themeid = $id;
			$p_newbd6->designer_themebordersrc = $p_bd6;
			$p_newbd6->designer_elementstatus = "Pending";   
			$p_newbd6->save();
			
			$p_newbd7 = new DesignerScrapbookThemeBorder;
		 	$p_newbd7->designer_themeid = $id;
			$p_newbd7->designer_themebordersrc = $p_bd7;
			$p_newbd7->designer_elementstatus = "Pending";   
			$p_newbd7->save();
			
			$p_newbd8 = new DesignerScrapbookThemeBorder;
		 	$p_newbd8->designer_themeid = $id;
			$p_newbd8->designer_themebordersrc = $p_bd8;
			$p_newbd8->designer_elementstatus = "Pending";   
			$p_newbd8->save();

			$p_newbd9 = new DesignerScrapbookThemeBorder;
		 	$p_newbd9->designer_themeid = $id;
			$p_newbd9->designer_themebordersrc = $p_bd9;
			$p_newbd9->designer_elementstatus = "Pending";   
			$p_newbd9->save();
			
			$p_newbd10 = new DesignerScrapbookThemeBorder;
		 	$p_newbd10->designer_themeid = $id;
			$p_newbd10->designer_themebordersrc = $p_bd10;
			$p_newbd10->designer_elementstatus = "Pending";   
			$p_newbd10->save();
		// SAVE BG (LANDSCAPE PATH)

  	}
	
	public function storeDesignerThemesBD_public(Request $request){

     if ($request->hasFile('designerBorder')){

			$image = $request->file('designerBorder');

			$filename = $image->getClientOriginalName();

	        $P_image_resize = Image::make($image->getRealPath());              
    		$P_image_resize->resize(505, 749);
	        $P_image_resize->save(public_path('/img/designer_themes/749x505/border/' .$filename));

	        $L_image_resize = Image::make($image->getRealPath());              
    		$L_image_resize->resize(749, 466);
	        $L_image_resize->save(public_path('/img/designer_themes/466x749/border/' .$filename));
	    }
    
    }

    public function updateBD(Request $request){
	    $themeid = $request->themeid;
	    $themebgid = $request->themebgid;
	    $src = $request->src;
	    $status = "Pending";
	    
	    $srcLandscape = "img/designer_themes/466x749/border/".$src;
	    $srcPortrait = "img/designer_themes/749x505/border/".$src;
	    
	    $updateAsset = DesignerScrapbookThemeBorder::where('designer_themeborderid', $themebgid)->first();
	    $updateAsset->designer_themebordersrc = $srcLandscape;
	    $updateAsset->designer_elementstatus = $status;
        $updateAsset->save(); 

    }
}

