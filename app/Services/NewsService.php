<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\News;
use App\Models\Roles;
use Illuminate\Http\Request;
use App\DataTransferObject\NewsDTO;

class NewsService
{
  public static function addNews(NewsDTO $newsDTO): NewsDTO
  {
    try {
      $news              = new News;
      $news->news_title  = $newsDTO->news_title;
      $news->role_id     = $newsDTO->roleId;
      $news->excerpt     = $newsDTO->excerpt;
      $news->image       = $newsDTO->image;
      $news->description = $newsDTO->description;
      $news->pdf         = $newsDTO->pdf;
      $news->save();

      return $newsDTO;

    } catch (\Exception $e) {
      report($e);
      report($e->getMessage());

    } catch (\Throwable $e) {
      report($e->getMessage());
      return back()->withError($e->getMessage())->withInput();
    }
  }


  public static function updateNews(NewsDTO $newsDTO, $id) : NewsDTO
  {
    try {
      $news              = News::findOrFail($id);
      $news->news_title  = $newsDTO->news_title;
      $news->role_id     = $newsDTO->roleId;
      $news->excerpt     = $newsDTO->excerpt;
      $news->image       = $newsDTO->image;
      $news->description = $newsDTO->description;
      $news->pdf         = $newsDTO->pdf;
      $news->save();

      return $newsDTO;

    } catch (\Exception $e) {
      report($e);
      report($e->getMessage());
    } catch (\Throwable $e) {
      report($e->getMessage());
      return back()->withError($e->getMessage())->withInput();
    }
  }


  public static function deleteNews($news)
  {
    try {
     $news       = News::findOrFail($news);
     $news->delete();

      return response()->json(['status'  => true, 'message' => 'News deleted succesfully'], 200);
    } catch (\Exception $e) {
      report($e);
      report($e->getMessage());
    } catch (\Throwable $e) {
      report($e->getMessage());
      return back()->withError($e->getMessage())->withInput();
    }
  }
}
