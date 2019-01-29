<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Member;
use App\Department;
use App\Group;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $members = Member::all();
        $depts   = Department::all();
        $groups  = Group::all();

        $count_member   = count($members);
        $count_dept     = count($depts);
        $count_group    = count($groups);

    	if ($request->isMethod('post')) {
    		$data = $request->input();
    		if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'])) {

    			return view('dashboard', compact('count_member', 'count_dept', 'count_group'));
                
    		} else {
    			return view('login');
    		}
    	}
    	return view('dashboard');
    }

    public function forgetpassword()
    {
    	return view('forgot-password');
    }

    public function index()
    {
        $members = Member::all();
        $depts   = Department::all();
        $groups  = Group::all();

        $count_member   = count($members);
        $count_dept     = count($depts);
        $count_group    = count($groups);

        return view('dashboard', compact('count_member', 'count_dept', 'count_group'));
    }
}
