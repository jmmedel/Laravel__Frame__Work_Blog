<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Dont forget toadd this ins not automatic at this point 
/*

FatalThrowableError (E_ERROR)
Class 'App\Http\Controllers\Post' not found

*/
//add post this is not automathic to access Post
use App\Post;
class PublicController extends Controller
{
    //
    public function index(){

       $posts = Post::all();
        return view('welcome',compact('posts'));
      
    }

   
}
