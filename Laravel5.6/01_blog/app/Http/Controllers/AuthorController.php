<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//  you need to add this manual in visual studio code this is not automatic
use App\Http\Requests\CreatePost;

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

    public function newPost(){
        
        return view('author.newPost');
    }

    public function createPost(CreatePost $request){


        $post = new Post();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->user_id = Auth::id();
        $post->save();

        return back()->with('success','Post is succesfully created ');
    }

    public function postEdit($id){

        $post = Post::where('id',$id)->where('user_id',Auth::id())->first();
        // compact pass the varible to the view
        return view('author.editPost',compact('post'));
    }

    public function postEditPost(CreatePost $request,$id){

        $post = Post::where('id',$id)->where('user_id',Auth::id())->first();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->save();

        return back()->with('success','Post updated Successfully');

    }



    public function deletePost ($id){

        $post = Post::where('id',$id)->where('user_id',Auth::id())->first();
        $post->delete();
        return back();

    }
}
