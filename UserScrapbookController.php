<?php

namespace flipnstyle\Http\Controllers;
use Auth;
use flipnstyle\User;
use flipnstyle\UserScrapbook;
use flipnstyle\UserScrapbookPage;
use flipnstyle\UserScrapbookPageElement;
use flipnstyle\UserSharedScrapbook;
use flipnstyle\Http\Requests;
use Illuminate\Http\Request;

class UserScrapbookController extends Controller
{
    protected $table = 'user_scrapbooks';


     public function getTitle()
    {
        return view('workspace.title');
    }

   public function postTitle(Request $request)
    {

        $firsttitle = $request->user_scrapbooktitle;
        $usedTheme = $request->themeid;
        $themePrice = $request->price;
        $sbheight = $request->height;
        $sbwidth = $request->width;
        $restriction = $request->restriction;

        $userid = Auth::user()->id;

        $scrapbook = new UserScrapbook;
        $scrapbook->user_scrapbooktitle = $firsttitle;
        $scrapbook->user_themeid = $usedTheme;
        $scrapbook->user_id = $userid;
        $scrapbook->user_themeid = $usedTheme;
        $scrapbook->user_scrapbookprice = $themePrice;
        $scrapbook->user_pageHeight = $sbheight;
        $scrapbook->user_pageWidth = $sbwidth;
        $scrapbook->save();

        $scrapbookauthor = new UserSharedScrapbook;
        $scrapbookauthor->user_scrapbookid = $scrapbook->user_scrapbookid;
        $scrapbookauthor->user_themeid = $usedTheme;
        $scrapbookauthor->user_scrapbookprice = $themePrice;
        $scrapbookauthor->user_scrapbookauthorcoauthor = $userid;
        $scrapbookauthor->user_scrapbookrestriction = $restriction;
        $scrapbookauthor->save();

        $data = [$scrapbook->user_scrapbookid,
        'scrapbooktitle' => $scrapbook->user_scrapbooktitle,
        'scrapbookid' => $scrapbook->user_scrapbookid,
        ];
        
        return response()->json($data); 
    }
     

    public function updateTitle(Request $request){

        $newtitle = $request->user_scrapbooktitle;
        $sid = $request->user_scrapbookid;

        $scrap = UserScrapbook::where('user_scrapbookid', $sid)->first();
        $scrap->user_scrapbooktitle = $newtitle;
        $scrap->save(); 
        
        $data = [
            'scrapbookid' => $scrap->user_scrapbookid,
            'newtitle' => $scrap->user_scrapbooktitle
        ];

        return response()->json($data); 
    }

}
