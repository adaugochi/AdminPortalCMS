<?php

namespace App\Http\Controllers\AdminPortal\SetUp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Offering;
use App\Member;

class OfferingSetUp extends Controller
{
    public function getOfferings()
    {
    	$offerings  = Offering::all();

    	return view('offering', compact('offerings'));
    }

    public function addOffering(Request $request)
    {
    	$this->validate($request, [
    		'amount' => 'required',
    		'tcode'  =>  'required',
    		'pdate'  =>  'required',
    	]);
        
        $offering       = new Offering;
    	$offering->amount            = $request->amount;
    	$offering->transaction_code = $request->tcode;
    	$offering->member_code      = $request->mcode;
    	$offering->payment_date     = $request->pdate;
    	$offering->member_id        = Member::where('member_code', '=', $request->mcode)->value('id');

    	if($offering->save()){
            return redirect()->back()->with(['success' => 'Offering successfully inserted.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to add offering']);
        }

    }

    public function updateOffering(Request $request)
    {
        //dd($request->all());
    	$this->validate($request, [
    		'amount' => 'required',
    		'tcode'  =>  'required',
    		'pdate'  =>  'required',
    	]);
        
        $offering       = Offering::find($request->id);
    	$offering->amount           = $request->amount;
    	$offering->transaction_code = $request->tcode;
    	$offering->member_code      = $request->mcode;
    	$offering->payment_date     = $request->pdate;
        $offering->member_id        = Member::where('member_code', '=', $request->mcode)->value('id');
        
        if($offering->save()){
            return redirect()->back()->with(['success' => 'Offering successfully updated.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to updated offering']);
        }

    }

    public function deleteOffering(Request $request)
    {
        //dd($request->all());
        $offering = Offering::find($request->id);
        $offering->delete();

        return back(); 
    }
}
