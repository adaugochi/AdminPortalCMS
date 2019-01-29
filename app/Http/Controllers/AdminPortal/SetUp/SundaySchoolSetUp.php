<?php

namespace App\Http\Controllers\AdminPortal\SetUp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SundaySchool;

class SundaySchoolSetUp extends Controller
{
    public function getSunSchs()
    {
    	$sunschs  = SundaySchool::all();

    	return view('sunsch', compact('sunschs'));
    }

    public function addSunSch(Request $request)
    {
    	$this->validate($request, [
    		'minister' => 'required',
    		'total'    => 'required',
    		'topic'    => 'required',
    	]);
        
        $sunsch       = new SundaySchool;
    	$sunsch->ministered_by = $request->minister;
    	$sunsch->topic = $request->topic;
    	$sunsch->content = $request->content;
    	$sunsch->date_time = $request->datetime;
    	$sunsch->total_attendees = $request->total;

    	if($sunsch->save()){
            return redirect()->back()->with(['success' => 'Sunday School successfully inserted.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to add sunday school']);
        }

    }

    public function updateSunSch(Request $request)
    {
        $this->validate($request, [
    		'minister' => 'required',
    		'total'    => 'required',
    		'topic'    => 'required',
    	]);
        
        $sunsch       = SundaySchool::find($request->id);
    	$sunsch->ministered_by   = $request->minister;
    	$sunsch->topic           = $request->topic;
    	$sunsch->content         = $request->content;
    	$sunsch->date_time       = $request->datetime;
    	$sunsch->total_attendees = $request->total;

        if($sunsch->save()){
            return redirect()->back()->with(['success' => 'Sunday school successfully updated.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to updated sunday school']);
        }

    }

    public function deleteSunSch(Request $request)
    {
        //dd($request->all());
        $sunsch = SundaySchool::find($request->id);
        $sunsch->delete();

        return back(); 
    }
}
