<?php

namespace flipnstyle\Http\Controllers;

use Illuminate\Http\Request;

use flipnstyle\Http\Requests;

use flipnstyle\DesignerScrapbookTheme;
use flipnstyle\DesignerScrapbookThemeBackground;
use flipnstyle\DesignerScrapbookThemeBorder;
use flipnstyle\DesignerScrapbookThemeEmbellishment;

use flipnstyle\files;

use Illuminate\Support\Facades\Input;


class DesignerScrapbookThemeController extends Controller
{
	protected $table = 'designer_scrapbookthemes';

    public function saveDesignerTheme(Request $request){
    	$id = $request->theme_id;
        $title = $request->theme_title;
        $price = $request->theme_price;
        $status = $request->status;

        $newTheme = new DesignerScrapbookTheme;

        $newTheme->designer_id = $id;
        $newTheme->designer_themetitle = $title;
        $newTheme->designer_themePrice = $price;
        $newTheme->status = $status;
		$newTheme->save();

        $data = [
            'themeid' => $newTheme->designer_themeid,
            'id' => $newTheme->designer_id,
            'title' => $newTheme->designer_themetitle,
            'price' => $newTheme->designer_themePrice,
            'status' => $newTheme->status,
        ];

        return response()->json($data); 
	}

    public function updateTheme(Request $request){
        $themeid = $request->themeid;

        $checkStatusBG = DesignerScrapbookThemeBackground::where('designer_themeid', $themeid)->get();
        $checkStatusBD = DesignerScrapbookThemeBorder::where('designer_themeid', $themeid)->get();
        $checkStatusEM = DesignerScrapbookThemeEmbellishment::where('designer_themeid', $themeid)->get();


        foreach ($checkStatusBG as $csbg) {
            if($csbg->designer_elementstatus == "Pending"){
                foreach ($checkStatusBD as $csbd) {
                    if($csbd->designer_elementstatus == "Pending"){
                        foreach ($checkStatusEM as $csem) {
                            if($csem->designer_elementstatus == "Pending"){
                            
                                $checkStatusTheme = DesignerScrapbookTheme::where('designer_themeid', $themeid)->first();
                                    $checkStatusTheme->status = "Pending";
                                    $checkStatusTheme->save();
        }}}}}}
    }

}
