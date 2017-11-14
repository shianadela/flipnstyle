<?php

namespace flipnstyle\Http\Controllers;

use Auth;

use flipnstyle\Purchase;

use flipnstyle\User;

use flipnstyle\UserScrapbook;

use Illuminate\Http\Request;

use flipnstyle\Http\Requests;

class PurchaseController extends Controller
{
	protected $table = 'purchases';

	public function purchase(Request $request){
        $p_scrapid = $request->scrapid;
        $p_designerid = $request->designerid;
        $p_themeid = $request->themeid;
        $p_title = $request->title;
        $p_name = $request->name;
        $p_address = $request->address;
        $p_no = $request->no;
        $p_card = $request->card;
        $p_courier = $request->courier;
        $p_city = $request->city;
        $p_pages = $request->pages;
        $p_themePrice = $request->themePrice;
        $p_excess_fee = $request->excess_fee;
        $p_extra_pages = $request->extra_pages;
        $p_shipping_fee = $request->shipping_fee;
        $p_total = $request->total;
        $p_userid = Auth::user()->id;

        $getAuthor = User::where('id', $p_userid)->get();

        foreach ($getAuthor as $ga) {
            $fname = $ga->first_name;
            $lname = $ga->last_name;
        }
            $newpurchase = new Purchase;                                        
            $newpurchase->userid = $p_userid;
            $newpurchase->designerid = $p_designerid;
            $newpurchase->themeid = $p_themeid;
            $newpurchase->purchase_scrapbookid = $p_scrapid;
            $newpurchase->purchase_name = $p_name;
            $newpurchase->purchase_scrapbooktitle = $p_title;
            $newpurchase->purchase_scrapbookfauthor = $fname;
            $newpurchase->purchase_scrapbooklauthor = $lname;
            $newpurchase->purchase_address = $p_address;
            $newpurchase->purchase_contactNumber = $p_no;
            $newpurchase->purchase_cardNumber = $p_card;
            $newpurchase->purchase_shippingCourier = $p_courier;
            $newpurchase->purchase_cityLocation = $p_city;
            $newpurchase->purchase_pages = $p_pages;
            $newpurchase->purchase_themePrice = $p_themePrice;
            $newpurchase->purchase_excessFee = $p_excess_fee;
            $newpurchase->purchase_extraPages = $p_extra_pages;
            $newpurchase->purchase_shippingFee = $p_shipping_fee;
            $newpurchase->purchase_total = $p_total;
            $newpurchase->save();  
        
    }

    public function purchaseList(){

        $userid = Auth::user()->id;

        $purchaseList = Purchase::where('userid', $userid)->get();
        foreach ($purchaseList as $pruL) {
            $scrapid = $pruL->purchase_scrapbookid;
        }

        $purchaseList = Purchase::where('userid', $userid)->get();

        $userdetails = User::where('id', $userid)->get();
        foreach ($userdetails as $ud) {
            $userfname = $ud->first_name;
            $userlname = $ud->last_name;
        }

        $scrapbookid = UserScrapbook::where('user_id', $userid)->get();
        
        return view('users.user-purchasehistory', compact('purchaseList', 'scrapbookid', 'userlname', 'userfname'));
    }
}
