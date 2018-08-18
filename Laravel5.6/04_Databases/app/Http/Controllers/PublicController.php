<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Dont forget toadd this ins not automatic at this point 
/*

FatalThrowableError (E_ERROR)
Class 'App\Http\Controllers\Post' not found

*/
use App\Post;
class PublicController extends Controller
{
    //
    public function index($name){
        return view('welcome');
    }

    public function userInfo($userId,$name){
    }


    public function displayPosts(){
        $posts = Post::all();

        foreach ($posts as $post){
            print $post-> title .'<br>';
        }
       // return var_dump($posts);
    }
}
