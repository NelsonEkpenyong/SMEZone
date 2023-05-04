<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\DataTransferObject\PostDTO;
use App\DataTransferObject\CommentDTO;

class PostController extends Controller
{

    private  PostService $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function store_post(Request $request){
        $postDto = new PostDTO($request->title, $request->body, $request->user_id);
        $post    = $this->postService->addPost($postDto);
        return response()->json($post);
    }

    public function store_comment(Request $request){
        $commentDTO = new CommentDTO($request->post_id, $request->user_id, $request->comment);
        $comment    = $this->postService->addComment($commentDTO);
        return response()->json($comment);
    }

    public function likes(Request $request){
       dd($request);
    }
}
