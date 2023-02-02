<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\HttpResponse;
use Str;

class ImageUploadController extends Controller
{
    use HttpResponse;
    public function index(Request $request){
      
      try {
        
        if($request->hasFile('image') && $request->file('image')->isValid()){
          $extension = $request->file('image')->getClientOriginalExtension();
          $image = Str::random(45).'.'.$extension;
          if($extension == 'png' || $extension  == 'jpg' || $extension == 'jpeg'){
          $path = $request->image->storeAs('images',$image);
          
           return $this->success([
             'image_url' => asset('storage/images/'.$image),
             'image_extension' => $extension
             ],'image uploaded successfuly');
          }else{
            return $this->error('','This ' .$extension.' file not supported');
          }
        }elseif(!$request->hasFile('image')){
          return $this->error('','No file found to upload');
        }
        
      } catch (\Throwable $e) {
        return $this->httpError($e->getMessage());
      }
      
    }
}
