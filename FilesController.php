<?php

namespace flipnstyle\Http\Controllers;

use Illuminate\Http\Request;

use flipnstyle\Http\Requests;

use flipnstyle\files;

use Illuminate\Support\Facades\Input;

use Intervention\Image\ImageManagerStatic as Image;

class FilesController extends Controller
{
  public function store(Request $request){

      if ($request->hasFile('savedImage')){
      
      $image = $request->file('savedImage');

      $filename = $image->getClientOriginalName();

          $image_resize = Image::make($image->getRealPath());              
        $image_resize->resize(175, 200);
          $image_resize->save(public_path('/img/image_uploads/' .$filename));

      }
  }

}
