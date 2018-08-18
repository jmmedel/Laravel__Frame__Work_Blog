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

    public function contact(){

        return view('contact');
    }

    public function contactPost(Request $request){
        
        if($request->hasfile('attachment')){
           $file = $request->file('attachment');

           echo "File name" .$file->getClientOriginalName();
           echo "<br>";
           $file->move('images',$file->getClientOriginalName());
        }else{
            return "NO";
        }
        $name = $request['message'];
        var_dump($request->input('message'));
        echo "<br>";
        var_dump($name);
    }
   
}
