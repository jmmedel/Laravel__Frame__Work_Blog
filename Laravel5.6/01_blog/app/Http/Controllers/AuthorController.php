<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('checkRole:author');

    }


    public function dashboard(){

        return view('author.dashboard');

    }

    public function comments(){

        return view('author.comments');

    }

    public function post(){

        return view('author.posts');

    }

}
