<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Industries;
use App\Interfaces\StoreObjectInterface;
use App\Utility\ResponseMessage;

class AddIndustryService{

  public static function addIndustry($request){
    try{
      $industry = new Industries;
      $industry->name  = $request->industry;
      $industry->slug  = $request->slug;
      $industry->save();
      
      return response()->json(['status'  => true,'message' => 'Industry created succesfully'],200);
    }catch (\Exception$e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
  }



}