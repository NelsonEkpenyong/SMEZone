<?php

namespace App\DataTransferObject;

class WebinarDTO {

   public function __construct(
      public string $webinar_name, 
      public string $webinar_link, 
      public string $webinar_thumbnail,
      public ?string $errorMessage = null
      ) {}
      

}