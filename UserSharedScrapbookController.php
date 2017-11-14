<?php

namespace flipnstyle\Http\Controllers;
use flipnstyle\UserScrapbookPageElement;
use Auth;
use flipnstyle\User;
use flipnstyle\UserScrapbook;
use flipnstyle\UserScrapbookPage;
use flipnstyle\UserSharedScrapbook;
use flipnstyle\Http\Requests;
use Illuminate\Http\Request;

class UserSharedScrapbookController extends Controller
{
    protected $table = 'user_sharedscrapbooks';
    
    public function shareScrapbook(Request $request){
        $sharedUser_email = $request->shared_email;
        $user_scrapbookid = $request->user_scrapbookid;
        $themeid = $request->themeid;
        $price = $request->price;
        $restrictions = $request->restriction;
        $coauthor = User::where('email', $sharedUser_email)->get();


        foreach($coauthor as $suid){
            $user_scrapbookauthorcoauthor = $suid->id;
        }
        $sharedScrapbookExist = UserSharedScrapbook::where('user_scrapbookid', $user_scrapbookid)
                                                    ->where('user_scrapbookauthorcoauthor', $user_scrapbookauthorcoauthor)
                                                    ->first();
        if( is_null($sharedScrapbookExist) ){
            $sharedScrapbook = new UserSharedScrapbook;                                        
            $sharedScrapbook->user_scrapbookid = $user_scrapbookid;
            $sharedScrapbook->user_scrapbookauthorcoauthor = $user_scrapbookauthorcoauthor;
            $sharedScrapbook->user_themeid = $themeid;
            $sharedScrapbook->user_scrapbookprice = $price;
            $sharedScrapbook->user_scrapbookrestriction = $restrictions;
            $sharedScrapbook->save();  
        }

        else{
            $sharedScrapbook = UserSharedScrapbook::where('user_scrapbookid', $user_scrapbookid)
                                                    ->where('user_scrapbookauthorcoauthor', $user_scrapbookauthorcoauthor)
                                                    ->first();
            $sharedScrapbook->user_scrapbookid = $user_scrapbookid;
            $sharedScrapbook->user_scrapbookauthorcoauthor = $user_scrapbookauthorcoauthor;
            $sharedScrapbook->user_themeid = $themeid;
            $sharedScrapbook->user_scrapbookprice = $price;
            $sharedScrapbook->user_scrapbookrestriction = $restrictions;
            $sharedScrapbook->save();
        }
    }
}
