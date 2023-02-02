<?php
namespace App\Traits;

trait HttpResponse {
  
protected function success($data,string $message = null , int $code = 200){
  return response()->json([
    'status' => 'request processed',
    'message' => $message,
    'data' => $data
    ],$code);
  
 }
 protected function error($data,string $message = null, int $code = 401){
   return response()->json([
     'status' => 'unauthorized',
     'message' => $message,
     'data' => $data
     ],$code);
 }
 protected function httpError($message){
   return response()->json([
     'status' => 'internal server error',
     'message' => $message
     ],500);
 }
}