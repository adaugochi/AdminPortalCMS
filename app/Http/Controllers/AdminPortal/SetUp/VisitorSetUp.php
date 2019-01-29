<?php

namespace App\Http\Controllers\AdminPortal\SetUp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Visitor;

class VisitorSetUp extends Controller
{
    public function getVisitors()
    {
    	$visitors  = Visitor::all();

    	return view('visitor', compact('visitors'));
    }

    public function addVisitor(Request $request)
    {
        $this->validate($request, [
            'fname'  => 'required',
            'lname' => 'required',
            'age'   => 'required'
        ]); 

    	$visitor = new Visitor;

    	$visitor->firstname      = $request->fname;
    	$visitor->lastname 		 = $request->lname;
    	$visitor->gender	     = $request->gender;
    	$visitor->birth_date     = $request->bdate;
    	$visitor->age_category   = $request->age;
    	$visitor->address        = $request->address;
    	$visitor->invited_by     = $request->by;
    	$visitor->phone_number   = $request->pnum;
    	$visitor->email          = $request->email;
    	$visitor->member_code    = $request->code;

    	if($visitor->save() ){
           return redirect()->back()->with(['success' => 'Visitor successfully created.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to insert visitor']);
        }
    }

    public function updateVisitor(Request $request)
    {
        $this->validate($request, [
            'fname'  => 'required',
            'lname' => 'required',
            'age'   => 'required'
        ]); 

    	$visitor = Visitor::find($request->id);

    	$visitor->firstname      = $request->fname;
    	$visitor->lastname 		 = $request->lname;
    	$visitor->gender	     = $request->gender;
    	$visitor->birth_date     = $request->bdate;
    	$visitor->age_category   = $request->age;
    	$visitor->address        = $request->address;
    	$visitor->invited_by     = $request->by;
    	$visitor->phone_number   = $request->pnum;
    	$visitor->email          = $request->email;
    	$visitor->member_code    = $request->code;

    	if($visitor->save() ){
           return redirect()->back()->with(['success' => 'Visitor successfully updated.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to update visitor']);
        }
    }

    public function deleteVisitor(Request $request)
    {
        //dd($request->all());
        $visitor = Visitor::find($request->id);
        $visitor->delete();

        return back(); 
    }
}
