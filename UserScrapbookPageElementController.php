<?php

namespace flipnstyle\Http\Controllers;
use flipnstyle\UserScrapbookPageElement;
use Auth;
use flipnstyle\User;
use flipnstyle\UserScrapbook;
use flipnstyle\UserScrapbookPage;
use flipnstyle\Http\Requests;
use Illuminate\Http\Request;

class UserScrapbookPageElementController extends Controller
{
    protected $table = 'user_scrapbookpageelements';
    
public function saveText(Request $request){

        $userid = Auth::user()->id;
        $sid = $request->user_scrapbookid;
        $spid = $request->user_scrapbookpagesid;
        $em   = $request->TextValue;
        $pg   = $request->PageNumber;
        $emx  = $request->TextXPosition;
        $emy  = $request->TextYPosition;
        $elementCopy = $request->elementCopy;
       
        $userid = Auth::user()->id;

        $newelement = UserScrapbookPageElement::where('user_scrapbookpagesid', $spid)
                                   // ->where('user_scrapbookelementsrc', $em)
                                   ->where('user_elementcopy', $elementCopy)
                                   ->where('user_scrapbookpagenumber', $pg)
                                   ->first();
        if (  is_null($newelement)   ){
            $pageElement = new UserScrapbookPageElement;
            $pageElement->user_scrapbookpagesid = $spid;
            $pageElement->user_scrapbookid = $sid;
            $pageElement->user_id = $userid;
            $pageElement->user_scrapbookelementsrc = $em;
            $pageElement->user_scrapbookpagenumber = $pg;
            $pageElement->user_elementcopy = $elementCopy;
            $pageElement->user_scrapbookelementxposition = $emx;
            $pageElement->user_scrapbookelementyposition = $emy;

            $pageElement->save();
        }   
    
        else {
            $pageElement = UserScrapbookPageElement::where('user_scrapbookpagesid', $spid)
                                        ->where('user_scrapbookpagenumber', $pg)
                                        // ->where('user_scrapbookelementsrc', $em)
                                        ->where('user_elementcopy', $elementCopy)
                                        ->first();
            $pageElement->user_scrapbookpagesid = $spid;
            $pageElement->user_scrapbookid = $sid;
            $pageElement->user_id = $userid;
            $pageElement->user_scrapbookelementsrc = $em;
            $pageElement->user_scrapbookpagenumber = $pg;
            $pageElement->user_elementcopy = $elementCopy;
            $pageElement->user_scrapbookelementxposition = $emx;
            $pageElement->user_scrapbookelementyposition = $emy;
            
            $pageElement->save();
        }
        
        $data = [
        'scrapboookelementid' => $pageElement->user_scrapbookpageelementid,
        'scrapbookpagesid' => $pageElement->user_scrapbookpagesid,
        'scrapbookid' => $pageElement->user_scrapbookid,
        'element_src' => $pageElement->user_scrapbookelementsrc,
        'pagenum' => $pageElement->user_scrapbookpagenumber,
        'pos_y' => $pageElement->user_scrapbookelementyposition,
        'pos_x' => $pageElement->user_scrapbookelementxposition,
        'response' => 'Saved Successfuly'
        ];

        return response()->json($data);
}

public function deleteLoadedText(Request $request){
        $id = $request->elementID;

        $searchElement = UserScrapbookPageElement::where('user_scrapbookpageelementid', $id)->delete();

        $data = [
        'scrapbookpagesid' => $id,
        'response' => 'Element Removed!'
        ];

        return response()->json($data);
}

public function saveElement(Request $request){
        $spid = $request->user_scrapbookpagesid;
        $sid = $request->user_scrapbookid;
        $em   = $request->user_scrapbookelementsrc;
        $pg   = $request->user_scrapbookpagenumber;
        $elementCopy = $request->elementCopy;
        $emx  = $request->user_scrapbookelementxposition;
        $emy  = $request->user_scrapbookelementyposition;

        $userid = Auth::user()->id;

        $newelement = UserScrapbookPageElement::where('user_scrapbookpagesid', $spid)
                                   ->where('user_scrapbookpagenumber', $pg)
                                    ->where('user_elementcopy', $elementCopy)
                                   ->where('user_scrapbookelementsrc', $em)
                                   ->first();

        if (  is_null($newelement)   ){
            $pageElement = new UserScrapbookPageElement;
            $pageElement->user_scrapbookpagesid = $spid;
            $pageElement->user_scrapbookid = $sid;
            $pageElement->user_id = $userid;
            $pageElement->user_scrapbookpagenumber = $pg;
            $pageElement->user_elementcopy = $elementCopy;
            $pageElement->user_scrapbookelementsrc = $em;
            $pageElement->user_scrapbookelementxposition = $emx;
            $pageElement->user_scrapbookelementyposition = $emy;

            $pageElement->save();
        }   
    
        else {
            $pageElement = UserScrapbookPageElement::where('user_scrapbookpagesid', $spid)
                                        ->where('user_scrapbookelementsrc', $em)
                                        ->where('user_elementcopy', $elementCopy)
                                        ->where('user_scrapbookpagenumber', $pg)
                                        ->first();
            $pageElement->user_scrapbookpagesid = $spid;
            $pageElement->user_scrapbookid = $sid;
            $pageElement->user_id = $userid;
            $pageElement->user_scrapbookpagenumber = $pg;
            $pageElement->user_elementcopy = $elementCopy;
            $pageElement->user_scrapbookelementsrc = $em;
            $pageElement->user_scrapbookelementxposition = $emx;
            $pageElement->user_scrapbookelementyposition = $emy;
            
            $pageElement->save();
        }
        
        $data = [
        'scrapboookelementid' => $pageElement->user_scrapbookpageelementid,
        'scrapbookpagesid' => $pageElement->user_scrapbookpagesid,
        'scrapbookid' => $pageElement->user_scrapbookid,
        'pagenum' => $pageElement->user_scrapbookpagenumber,
        'element_src' => $pageElement->user_scrapbookelementsrc,
        'pos_x' => $pageElement->user_scrapbookelementxposition,
        'pos_y' => $pageElement->user_scrapbookelementyposition,
        'response' => 'Saved Successfuly'
        ];

        return response()->json($data);
}

public function deleteElement(Request $request){
        $spid = $request->user_scrapbookpagesid;
        $re = $request->removeEmbellishment;

        $searchElement = UserScrapbookPageElement::where('user_scrapbookpageelementid', $re)->delete();

        $data = [
        'scrapbookpagesid' => $spid,
        'imgsrc' => $re,
        'response' => 'Element Removed!'
        ];

        return response()->json($data);
}

public function editElement(Request $request){
        $id = $request->user_scrapbookpageelementid;
        $src = $request->user_scrapbookelementsrc;
        $x = $request->user_scrapbookelementxposition;
        $y = $request->user_scrapbookelementyposition;

        $editElement = UserScrapbookPageElement::where('user_scrapbookpageelementid', $id)->first();
        $editElement->user_scrapbookelementsrc = $src;
        $editElement->user_scrapbookelementxposition = $x;
        $editElement->user_scrapbookelementyposition = $y;
        $editElement->save(); 


        $data = [
        'id' => $id,
        'src' => $src,
        'x' => $x,
        'y' => $y
        ];

        return response()->json($data);
}

public function saveEditedText(Request $request){
        $elemID = $request->elemID;
        $src   = $request->src;
        $x  = $request->x;
        $y  = $request->y;

        $editTextElement = UserScrapbookPageElement::where('user_scrapbookpageelementid', $elemID)->first();
        $editTextElement->user_scrapbookelementsrc = $src;
        $editTextElement->user_scrapbookelementxposition = $x;
        $editTextElement->user_scrapbookelementyposition = $y;
        $editTextElement->save(); 

        
        $data = [
        'scrapboookelementid' => $editTextElement->user_scrapbookpageelementid,
        'element_src' => $editTextElement->user_scrapbookelementsrc,
        'pos_x' => $editTextElement->user_scrapbookelementxposition,
        'pos_y' => $editTextElement->user_scrapbookelementyposition,
        'response' => 'Saved Successfuly'
        ];

        return response()->json($data);
}














}   


