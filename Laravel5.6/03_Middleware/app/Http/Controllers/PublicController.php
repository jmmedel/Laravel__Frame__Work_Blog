<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function index($name){
        return view('welcome');
    }

    public function userInfo($userId,$name){
    }
}
