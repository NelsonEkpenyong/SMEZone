<?php

namespace App\DataTransferObject;
use Illuminate\Http\UploadedFile;

class OpportunityDTO {
   public string $title;
   public string $provider;
   public string $link;
   public string $description;
   public UploadedFile $image;

   public function __construct(string $title, string $provider, string $link, string $description, UploadedFile $image){
       $this->title       = $title;
       $this->provider    = $provider;
       $this->link        = $link;
       $this->description = $description;
       $this->image       = $image;
   }

}