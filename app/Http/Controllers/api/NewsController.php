<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Services\NewsService;
use App\DataTransferObject\NewsDTO;

class NewsController extends Controller
{

    public function __construct(private  NewsService $newsService){}

    public function add_news(NewsRequest $request){
        $newsDto = new NewsDTO($request->news_title, $request->role_id, $request->excerpt, $request->image, $request->description,  $request->pdf );
        $news    = $this->newsService::addNews($newsDto);
        return response()->json($news);
    }

}
