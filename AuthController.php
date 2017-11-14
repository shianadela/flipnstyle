<?php

namespace flipnstyle\Http\Controllers;

use Auth;
use flipnstyle\User;
use Illuminate\Http\Request;
use flipnstyle\Http\Requests;

class AuthController extends Controller
{
    public function getUserRegister()
    {
    	return view('users.user-register');
    }

    public function getUserLogin()
    {
    	return view('users.user-login');
    }

    public function postUserRegister(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|unique:users|email|max:255',
    		'password' => 'required|min:6',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255'
    	]);

    	User::create([
    		'email' => $request->input('email'),
    		'password' => bcrypt($request->input('password')),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name')
    	]);

    	return redirect()
    		->route('flipnstyle')
    		->withInfo('Your account has been created and you can now sign in');
    }

    public function postUserLogin(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required',
    		'password' => 'required'
    	]);

    	$authStatus = Auth::attempt($request->only(['email', 'password']), $request->has('remember'));
    	if (!$authStatus) {
    		return redirect()->back()->with('info', 'Incorrect Email or Password');
    	}

    	return redirect()
        ->route('flipnstyle_u')
        ->with('info', 'You are now loggged in');
    }


    public function logOut() 
    {
    	Auth::logout();

    	return redirect()->route('flipnstyle');
    }



}
