<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\News;
use Carbon\Carbon;

class CommunityController extends Controller
{
    //

    public function dashboard()
    {
        return view('community.dashboard');
    }

    public function community(int $id = 0)
    {
        if (Auth::check()) {
            if (!$id) { $id = Auth::user()->id; }
            else { $id = User::findOrFail($id)->id; }

            $posts        = Post::withCount(['comments', 'likes'])->orderBy('id', 'desc')->with('user:id,first_name', 'comments')->where('user_id', $id)->paginate(2);
            $lastActivity = Carbon::now()->subMinutes(10)->format('Y-m-d H:i:s');
            $onlineUsers  = User::where('last_activity', '>=', $lastActivity)->where('id', '!=', Auth::id())->get();

            return view('community.community', compact('onlineUsers', 'posts', 'id'));
        } else {
            return redirect()->route('login');
        }
    }

    public function store_post(Request $request)
    {
        $responded = Route::dispatch(Request::create("api/post/post", 'POST', $request->all()));
        if ($responded->status() == 200) {
            flash()->addSuccess('Post Created Successfully!😃');
            return redirect('/community');
        }
        return redirect()->back()->with('error', 'Post couldn\'t be created 😞');
    }



    public function store_comment(Request $request, $id)
    {
        $responded = Route::dispatch(Request::create("api/post/comment/{id}", 'POST', $request->all()));
        if ($responded->status() == 200) {
            flash()->addSuccess('Comment Created Successfully!😃');
            return redirect('/community');
        }
        return redirect()->back()->with('error', 'Comment couldn\'t be created 😞');
    }

    public function post_likes(Request $request, $post_id, $comment_id)
    {
        $responded = Route::dispatch(Request::create("api/post/likes/{post_id}/{comment_id}", 'POST', $request->all()));
        if ($responded->status() == 200) {
            flash()->addSuccess('liked Successfully!😃');
            return redirect('/community');
        }
        return redirect()->back()->with('error', 'post couldn\'t be liked 😞');
    }


    public function news()
    {
        $lastActivity = Carbon::now()->subMinutes(10)->format('Y-m-d H:i:s');
        $onlineUsers  = User::where('last_activity', '>=', $lastActivity)->where('id', '!=', Auth::id())->get();
        $news         = News::select(['news_title','excerpt', 'description','created_at'])->get();
        return view('community.news', compact('onlineUsers','news'));
    }

    public function webinars()
    {
        $lastActivity = Carbon::now()->subMinutes(10)->format('Y-m-d H:i:s');
        $onlineUsers  = User::where('last_activity', '>=', $lastActivity)->where('id', '!=', Auth::id())->get();
        return view('community.webinars', compact('onlineUsers'));
    }
}
