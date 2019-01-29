<?php

namespace App\Http\Controllers\AdminPortal\SetUp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tithe;
use App\Member;

class TitheSetUp extends Controller
{
    public function getTithes()
    {
    	$tithes  = Tithe::all();

    	return view('tithe', compact('tithes'));
    }

    public function addTithe(Request $request)
    {
    	$this->validate($request, [
    		'amount' => 'required',
    		'tcode'  =>  'required',
    		'pdate'  =>  'required',
    	]);
        
        $tithe       = new Tithe;
    	$tithe->amount            = $request->amount;
    	$tithe->transaction_code = $request->tcode;
    	$tithe->member_code      = $request->mcode;
    	$tithe->payment_date     = $request->pdate;
    	$tithe->member_id        = Member::where('member_code', '=', $request->mcode)->value('id');

    	if($tithe->save()){
            return redirect()->back()->with(['success' => 'tithe successfully inserted.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to add tithe']);
        }

    }

    public function updateTithe(Request $request)
    {
        //dd($request->all());
    	$this->validate($request, [
    		'amount' => 'required',
    		'tcode'  =>  'required',
    		'pdate'  =>  'required',
    	]);
        
        $tithe       = Tithe::find($request->id);
    	$tithe->amount           = $request->amount;
    	$tithe->transaction_code = $request->tcode;
    	$tithe->member_code      = $request->mcode;
    	$tithe->payment_date     = $request->pdate;
        $tithe->member_id        = Member::where('member_code', '=', $request->mcode)->value('id');
        
        if($tithe->save()){
            return redirect()->back()->with(['success' => 'tithe successfully updated.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to updated tithe']);
        }

    }

    public function deleteTithe(Request $request)
    {
        //dd($request->all());
        $tithe = Tithe::find($request->id);
        $tithe->delete();

        return back(); 
    }
}
