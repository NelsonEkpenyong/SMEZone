<?php

namespace App\DataTransferObject;

class PostDTO {
   public string $title;
   public string $body;
   public int $userId;

   public function __construct(string $title, string $body, int $userId){
       $this->title  = $title;
       $this->body   = $body;
       $this->userId = $userId;
   }

}