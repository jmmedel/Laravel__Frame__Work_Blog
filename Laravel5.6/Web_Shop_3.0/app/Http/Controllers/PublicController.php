<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;
class PublicController extends Controller
{
    //
    public function index(){
        
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        
        return view('welcome',compact('posts'));
    }

    public function singlePost(Post $post){
       
        $post->increment('views');
       
        return view('singlePost',compact('post'));
    }

    public function about(){
        return view('about');
    }
    
    public function contact(){
        return view('contact');
    }

    public function contactPost(){
        
    }

    // this is add by kagaya john 12/03 need to fix later 
    public function public_profile(){
        return view('user.public_profile', array('user' => Auth::user()) );
        
    }

}
