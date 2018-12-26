<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
class UserControllerProfile extends Controller
{
    //
    public function profile(){
    	return view('profile', array('user' => Auth::user()) );
    }
    public function update_avatar(Request $request){
    	// Handle the user upload of avatar
    	if($request->hasFile('avatars')){
    		$avatars = $request->file('avatars');
    		$filename = time() . '.' . $avatars->getClientOriginalExtension();
    		Image::make($avatars)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
    		$user = Auth::user();
    		$user->avatars = $filename;
    		$user->save();
    	}
    	return view('profile', array('user' => Auth::user()) );
	}
	
	
}
