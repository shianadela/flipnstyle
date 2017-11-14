<?php

namespace flipnstyle\Http\Controllers;
use Auth;
use flipnstyle\User;
use flipnstyle\UserScrapbook;
use flipnstyle\UserScrapbookPage;
use flipnstyle\UserScrapbookPageElement;
use flipnstyle\Http\Requests;
use Illuminate\Http\Request;

class UserScrapbookPageController extends Controller
{
    protected $table = 'user_scrapbookpages';
    
    public function savePage(Request $request){
        $scrapbookid = $request->scrapbookid;
        $spg = $request->pgNum;
        $sbg = $request->newbg;
        $userid = Auth::user()->id;
        $newscrapbook = UserScrapbookPage::where('user_scrapbookid', $scrapbookid)
                     ->where('user_scrapbookpagenumber',$spg)
                     ->first();
        $models = (array)UserScrapbookPage::all();
        $models = array_filter($models);
        if( ( empty($models) ) || ( is_null($newscrapbook) ) ){
            $scraps = new UserScrapbookPage;
            $scraps->user_scrapbookid = $scrapbookid; 
            $scraps->user_id = $userid;
            $scraps->user_scrapbookpagenumber = $spg;
            $scraps->user_scrapbookbackgroundsrc = $sbg;
            $scraps->save();
        }
        else{
                $scraps = UserScrapbookPage::where('user_scrapbookid', $scrapbookid)
                                         ->where('user_scrapbookpagenumber',$spg)
                                         ->first();
                $scraps->user_scrapbookpagenumber =  $spg;
                $scraps->user_id = $userid;
                $scraps->user_scrapbookbackgroundsrc = $sbg;
                $scraps->save();
        }

        $data = [
        'scrapbookpagesid' => $scraps->user_scrapbookpagesid,
        'scrapbookid' => $scraps->user_scrapbookid,
        'pagenum' => $scraps->user_scrapbookpagenumber,
        'userid' => $scraps->user_id,
        'background_src' => $scraps->user_scrapbookbackgroundsrc,
        ];

        return response()->json($data);     
    }
}
