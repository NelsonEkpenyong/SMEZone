<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\DataTransferObject\PostDTO;
use App\DataTransferObject\CommentDTO;

class PostService {

  public function addPost(PostDTO $postDTO) : PostDTO
  {
    try{
      $post            = new Post;
      $post->title     = $postDTO->title;
      $post->body      = $postDTO->body;
      $post->user_id   = $postDTO->userId;
      $post->save();

      return $postDTO;

    }catch (\Exception $e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
  }


  public static function updatePost(PostDTO $postDTO, $id)
  {
    try{
      $post            = Post::findOrFail($id);
      $post->title     = $postDTO->title;
      $post->body      = $postDTO->body;
      $post->user_id   = $postDTO->userId;
      $post->save();

      return $postDTO;

    }catch (\Exception$e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
  }


  public function addComment(CommentDTO $commentDTO) : CommentDTO
  {
    try{
      $comment            = new Comment;
      $comment->post_id   = $commentDTO->postId;
      $comment->user_id   = $commentDTO->userId;
      $comment->body      = $commentDTO->body;
      $comment->save();

      
      return $commentDTO;

    }catch (\Exception $e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
  }
 

}