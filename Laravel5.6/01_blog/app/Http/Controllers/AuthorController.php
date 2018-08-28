<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
// you need to add this manual 
use App\Comment;

use Carbon\Carbon;
// you need to add this manual in visual studio code this is not automatic
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('checkRole:author');

    }


    public function dashboard(){

        $posts = Post::where('user_id',Auth::id())->pluck('id')->toArray();
        $allcomments = Comment::whereIn('post_id',$posts)->get();
        $todayComments = $allcomments->where('created_at','>=',Carbon::today())->count();
        return view('author.dashboard',compact('allcomments','todayComments'));

    }

    public function comments(){

        return view('author.comments');

    }

    public function post(){

        return view('author.posts');

    }

}
