<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class ProfileController extends Controller
{
    //initialize profile using username
    public function profile($username){

    	$user = User::whereUsername($username)->first();
    	//dd($user->email);
    	return view('user.profile',compact('user'));
    } 
}
