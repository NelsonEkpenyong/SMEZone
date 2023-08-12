<?php

namespace App\DataTransferObject;

class DigestDTO {

   public function __construct(
      public string $digest_name, 
      public string $digest_link, 
      public ?string $digest_thumbnail,
      public ?string $errorMessage = null
      ) {}
}