<?php

namespace App\Http\Controllers\AdminPortal\SetUp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Giving;
use App\Member;

class GivingSetUp extends Controller
{
    public function getGivings()
    {
    	$givings  = Giving::all();

    	return view('giving', compact('givings'));
    }

     public function addGiving(Request $request)
    {
    	$this->validate($request, [
    		'pdate' => 'required',
    	]);
        
        $giving       = new Giving;
    	$giving->amount           = $request->amount;
    	$giving->item             = $request->item;
    	$giving->transaction_code = $request->tcode;
    	$giving->member_code      = $request->mcode;
    	$giving->date_of_giving   = $request->pdate;
    	$giving->member_id        = Member::where('member_code', '=', $request->mcode)->value('id');

    	if($giving->save()){
            return redirect()->back()->with(['success' => 'giving successfully inserted.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to add giving']);
        }

    }

    public function updateGiving(Request $request)
    {
        //dd($request->all());
    	$this->validate($request, [
    		'pdate'  =>  'required',
    	]);
        
        $giving       = Giving::find($request->id);
    	$giving->amount           = $request->amount;
    	$giving->item             = $request->item;
    	$giving->transaction_code = $request->tcode;
    	$giving->member_code      = $request->mcode;
    	$giving->date_of_giving   = $request->pdate;
        $giving->member_id        = Member::where('member_code', '=', $request->mcode)->value('id');
        
        if($giving->save()){
            return redirect()->back()->with(['success' => 'giving successfully updated.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to updated giving']);
        }

    }

    public function deleteGiving(Request $request)
    {
        //dd($request->all());
        $giving = Giving::find($request->id);
        $giving->delete();

        return back(); 
    }
}
