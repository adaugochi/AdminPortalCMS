<?php

namespace App\Http\Controllers\AdminPortal\SetUp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use App\Member;

class GroupSetUp extends Controller
{
    public function getGroups()
    {
    	$groups  = Group::all();

    	return view('group', compact('groups'));
    }

    public function showMember($id)
    {
        $members = Member::where('group_id', $id)->get();
        $group   = Group::find($id);
        //dd($group);
        return view('groupmember', compact('members', 'group'));
    }

    public function addGroup(Request $request)
    {
    	$this->validate($request, [
    		'group' => 'required',
    	]);
        
        $group       = new Group;
    	$group->name = $request->group;

    	if($group->save()){
            return redirect()->back()->with(['success' => 'Group successfully inserted.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to add group']);
        }

    }

    public function updateGroup(Request $request)
    {
        //dd($request->all());

        $this->validate($request, [
            'group' => 'required',
        ]);
        
        $group       = Group::find($request->id);
        $group->name = $request->group;

        if($group->save()){
            return redirect()->back()->with(['success' => 'Group successfully updated.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to updated group']);
        }

    }

    public function deleteGroup (Request $request)
    {
        //dd($request->all());
        $group = Group::find($request->id);
        $group->delete();

        return back(); 
    }
}
