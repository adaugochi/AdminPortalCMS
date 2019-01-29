<?php

namespace App\Http\Controllers\AdminPortal\SetUp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Announcement;

class AnnouncementSetUp extends Controller
{
    public function getAnnouncements()
    {
    	$announces  = Announcement::all();

    	return view('announcement', compact('announces'));
    }

    public function addAnnouncement(Request $request)
    {
        $this->validate($request, [
            'title'  => 'required',
            'spoken' => 'required',
            'code'   => 'required'
        ]); 

    	$announce = new Announcement;

    	$announce->title                = $request->title;
    	$announce->description 		    = $request->des;
    	$announce->made_by 			    = $request->spoken;
    	$announce->time_of_announcement = $request->date;
    	$announce->member_code		    = $request->code;

    	if($announce->save() ){
           return redirect()->back()->with(['success' => 'Announcement successfully created.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to insert announcement']);
        }
    }

    public function updateAnnounce(Request $request)
    {
        $this->validate($request, [
            'title'  => 'required',
            'spoken' => 'required',
            'code'   => 'required',
        ]); 

        $announce = Announcement::find($request->id);

        $announce->title                = $request->title;
        $announce->description          = $request->des;
        $announce->made_by              = $request->spoken;
        $announce->time_of_announcement = $request->date;
        $announce->member_code          = $request->code;

        if($announce->save() ){
            return redirect()->back()->with(['success' => 'Announcement successfully updated.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to updated announcement']);
        }
    }

    public function deleteAnnounce(Request $request)
    {
        //dd($request->all());
        $announce = Announcement::find($request->id);
        $announce->delete();

        return back(); 
    }
}
