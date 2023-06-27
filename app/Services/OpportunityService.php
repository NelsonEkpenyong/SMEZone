<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\OpportunityZone;
use Illuminate\Http\Request;
use App\DataTransferObject\OpportunityDTO;
use Illuminate\Http\UploadedFile;

class OpportunityService
{

  public function addOpportunity(OpportunityDTO $opportunityDTO): OpportunityDTO
  {
    try {
      $opportunity              = new OpportunityZone;
      $opportunity->title       = $opportunityDTO->title;
      $opportunity->provider    = $opportunityDTO->provider;
      $opportunity->link        = $opportunityDTO->link;
      $opportunity->description = $opportunityDTO->description;

      if ($opportunityDTO->image instanceof UploadedFile) {

          $image             = $opportunityDTO->image;
          $fileExtension     = $image->getClientOriginalExtension();
          $allowedExtensions = ['jpg','png','jpeg','gif','svg'];

          if (!in_array($fileExtension, $allowedExtensions)) {
           throw new \InvalidArgumentException('File type not supported');
          }

          $file_name = Str::random(4) . '.' . $fileExtension;
          $image->move(public_path('images'), $file_name);
          
          $opportunity->image = $file_name;
       }

      $opportunity->save();

      return $opportunityDTO;
    } catch (\Exception $e) {
      report($e);
      report($e->getMessage());
    } catch (\Throwable $e) {
      report($e->getMessage());
      return back()->withError($e->getMessage())->withInput();
    }
  }



}
