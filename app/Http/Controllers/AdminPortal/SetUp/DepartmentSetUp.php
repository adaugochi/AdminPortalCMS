<?php

namespace App\Http\Controllers\AdminPortal\SetUp;

use AdminPortal\SetUp\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Member;

class DepartmentSetUp extends Controller
{
    public function getDepartments()
    {
    	$departments  = Department::get();

        return view('department', compact('departments'));
    }

    public function showDepartment($id)
    {
        $members  = Member::where('department_id', $id)->get();
        $dept   = Department::find($id);
        //dd($members);
        return view('deptmember', compact('members', 'dept'));
    }

    public function addDepartment(Request $request)
    {
    	$this->validate($request, [
    		'department' => 'required',
    	]);
        
        $dept       = new Department;
    	$dept->name = $request->department;

    	if($dept->save()){
            return redirect()->back()->with(['success' => 'Department successfully inserted.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to add department']);
        }

    }

    public function updateDepartment(Request $request)
    {
        //dd($request->all());

        $this->validate($request, [
            'department' => 'required',
        ]);
        
        $dept       = Department::find($request->id);
        $dept->name = $request->department;

        if($dept->save()){
            return redirect()->back()->with(['success' => 'Department successfully updated.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to updated department']);
        }

    }

    public function deleteDepartment (Request $request)
    {
        //dd($request->all());
        $dept = Department::find($request->id);
        $dept->delete();

        return back(); 
    }
}
