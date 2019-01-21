<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function login(Request $request)
    {
    	if ($request->isMethod('post')) {
    		$data = $request->input();
    		if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'])) {
    			return view('dashboard');
    		} else {
    			echo "failed"; die;
    		}
    	}
    	return view('login');
    }

    public function forgetpassword()
    {
    	return view('forgot-password');
    }

    public function index()
    {
    	return view('dashboard');
    }
}
