<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;


class UserController extends Controller
{
    public function Register(){
    	return view("users.register");

    }
    public function signup(Request $request){

    	$this->validate($request,[
    		"username"=>"required|max:255",
    		"email"=>"required|max:255",
    		"password"=>"required|min:6|confirmed"

    	]);
    	$newUser = new User();
    	$newUser->name =  $request->username;
    	$newUser->email = $request->email;
    	$password = bcrypt($request->password);
    	$newUser->password = $password;
    	$newUser->save();
    	return redirect ("/signin");

    }
    public function Login(){
    	return view("users.login");
    }
    public function signin(Request $request){
    	$email = $request->input("email");
    	$password = $request->input("password");
    	if (Auth::attempt(["email"=>$email, "password"=>$password])){
    		return redirect("/music");
    	}
    	else {
    		 return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    	}
    }
}
