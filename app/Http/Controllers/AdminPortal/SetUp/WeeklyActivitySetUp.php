<?php

namespace App\Http\Controllers\AdminPortal\SetUp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WeeklyActivity;

class WeeklyActivitySetUp extends Controller
{
    public function getWeeklyActs()
    {
    	$wkacts  = WeeklyActivity::all();

    	return view('weeklyactivity', compact('wkacts'));
    }

    public function addWkAct(Request $request)
    {
    	$this->validate($request, [
    		'wkact' => 'required',
    		'day'  =>  'required',
    		'time'  =>  'required',
    	]);
        
        $wkact       = new WeeklyActivity;
    	$wkact->name             = $request->wkact;
    	$wkact->day_of_week      = $request->day;
    	$wkact->time_of_activity = $request->time;

    	if($wkact->save()){
            return redirect()->back()->with(['success' => 'Weekly Activity successfully inserted.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to add weekly activity']);
        }

    }

    public function updateWkAct(Request $request)
    {
        //dd($request->all());
    	$this->validate($request, [
    		'wkact' => 'required',
    		'day'  =>  'required',
    		'time'  =>  'required',
    	]);
        
        $wkact       = WeeklyActivity::find($request->id);
    	$wkact->name             = $request->wkact;
    	$wkact->day_of_week      = $request->day;
    	$wkact->time_of_activity = $request->time;
       
        if($wkact->save()){
            return redirect()->back()->with(['success' => 'Weekly activity successfully updated.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to updated weekly activity']);
        }

    }

    public function deleteWkAct(Request $request)
    {
        //dd($request->all());
        $wkact = WeeklyActivity::find($request->id);
        $wkact->delete();

        return back(); 
    }
}
