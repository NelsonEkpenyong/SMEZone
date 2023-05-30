<?php

namespace App\DataTransferObject;

class NewsDTO {

   public function __construct(public string $news_title, public int $roleId, public string $excerpt, public ?string $image = null, public string $description, public ?string $pdf = null){}

}