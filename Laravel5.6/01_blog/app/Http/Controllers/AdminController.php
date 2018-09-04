<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



//  you need to add this manual in visual studio code this is not automatic
use App\Http\Requests\CreatePost;

use App\Post;
// you need to add this manual 

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('checkRole:admin');

    }

    public function dashboard(){

        return view('admin.dashboard');
    }

    public function comments(){

        return view('admin.comments');
    }


    public function posts(){

        $posts = Post::all();
        return view('admin.posts',compact('posts'));
    }



    public function users(){

        return view('admin.users');
    }



    public function postEditPost(CreatedPost $request, $id){

        $post = Post::where('id',$id)->first();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->save();

        return back()->with('success','Post updated Successfully');
    }

    public function deletePost($id){

        $post = Post::where('id',$id)->first();
        
    }


    public function postEdit($id){

        $post = Post::where('id',$id)->first();
        return view('admin.editPost',compact('post'));

    }


}
