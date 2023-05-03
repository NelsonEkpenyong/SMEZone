<?php 

namespace App\Utility;

class ResponseMessage{
  public function errorResponse($status,$message, $statusCode){
    return response()->json(['status' => $status, 'message' => $message], $statusCode);
  }

  public function successResponse( $status, $message,$statusCode){
      return response()->json(['status' => $status, 'message' => $message], $statusCode);
  }
  public function showMessage($data, $status){
      return response()->json(['data' => $data], $status);
  }
}