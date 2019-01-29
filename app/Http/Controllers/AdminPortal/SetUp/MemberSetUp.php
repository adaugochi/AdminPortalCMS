<?php

namespace App\Http\Controllers\AdminPortal\SetUp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use App\Group;
use App\Department;

class MemberSetUp extends Controller
{
    public function getMembers()
    {
    	$members  = Member::all();
    	$groups  = Group::all();
    	$departments   = Department::all();

    	return view('member', compact('members', 'groups', 'departments'));
    }

    public function addMember(Request $request)
    {
        $this->validate($request, [
            'fname'  => 'required',
            'lname'  => 'required',
            'age'    => 'required',
            'gender' => 'required',
            'bdate'  => 'required',
            'address'=> 'required',
        ]); 

    	$member  = new Member;
    	

    	$member->firstname      = $request->fname;
    	$member->lastname 		= $request->lname;
    	$member->gender	        = $request->gender;
    	$member->birth_date     = $request->bdate;
    	$member->age_category   = $request->age;
    	$member->address        = $request->address;
    	$member->phone_number   = $request->pnum;
    	$member->email          = $request->email;
    	$member->group_id       = $request->group;
    	$member->department_id  = $request->department;

    	if($member->save() ){
           return redirect()->back()->with(['success' => 'Member successfully created.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to insert member']);
        }
    }

    public function updateMember(Request $request)
    {
        $this->validate($request, [
            'fname'  => 'required',
            'lname'  => 'required',
            'age'    => 'required',
            'gender' => 'required',
            'bdate'  => 'required',
            'address'=> 'required',
        ]); 

    	$member  = Member::find($request->id);	

    	$member->firstname      = $request->fname;
    	$member->lastname 		= $request->lname;
    	$member->gender	        = $request->gender;
    	$member->birth_date     = $request->bdate;
    	$member->age_category   = $request->age;
    	$member->address        = $request->address;
    	$member->phone_number   = $request->pnum;
    	$member->email          = $request->email;
    	$member->group_id       = $request->group;
    	$member->department_id  = $request->department;

    	if($member->save() ){
           return redirect()->back()->with(['success' => 'Member successfully updated.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to update member']);
        }
    }

    public function deleteMember (Request $request)
    {
        //dd($request->all());
        $group = Member::find($request->id);
        $group->delete();

        return back(); 
    }
}
