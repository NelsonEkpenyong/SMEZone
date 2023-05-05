<?php

namespace App\DataTransferObject;

class CommentDTO {
   public int $postId;
   public int $userId;
   public string $body;
  

   public function __construct(int $postId, int $userId, string $body){
       $this->postId = $postId;
       $this->userId = $userId;
       $this->body   = $body;
   }

}