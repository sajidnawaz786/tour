<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\backend\User;
class UserController extends Controller
{
    public function login(){
    	return view('backend.pages.login');
    }

    public function loginUser(){
    	request()->validate([
    		'email' => 'required|email',
    		'password' => 'required'
    	]);
    	$user = new \App\Models\backend\User;
    	if (auth()->attempt(request()->except(['_token']))) {
    		return redirect('/admin/dashboard')->with('success','You logged in successfully.');
    	}else{
    		return back()->withInput()->withErrors(['error' => 'Your email or password is incorrect']);
    	}
    }

    public function signup(){
    	return view('backend.pages.signup');
    }

    public function store(){
    	$user = new \App\Models\backend\User;
    	request()->validate([
    		'name' => 'required|max:55',
    		'password' => ['required','confirmed'],
    		'email' => 'required|email'
    	]);
    	$attributes = request()->all();
    	$user->name = $attributes['name'];
    	$user->email = $attributes['email'];
    	$user->password = bcrypt($attributes['password']);
    	$user->status = 'active';
    	if ($user->save()) {
    		auth()->attempt(request()->except(['_token']));
    		return redirect('/admin/dashboard')->with('success','You logged in successfully.'); 
    	} else {
    		return redirect('/admin/signup')->with('error','Some error encountered. try again.');
    	}
    }

    public function logout(){
    	auth()->logout();
    	return redirect('admin/login')->with('success','You logged out successfully');
    }
}
