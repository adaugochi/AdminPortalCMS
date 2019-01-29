<?php

namespace App\Http\Controllers\AdminPortal\SetUp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class EventSetUp extends Controller
{
    public function getEvents()
    {
    	$events  = Event::all();

    	return view('event', compact('events'));
    }

    public function addEvent(Request $request)
    {
    	$this->validate($request, [
    		'event' => 'required',
    		'date'  =>  'required',
    	]);
        
        $event       = new Event;
    	$event->event_name = $request->event;
    	$event->date_of_event = $request->date;

    	if($event->save()){
            return redirect()->back()->with(['success' => 'Event successfully inserted.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to add event']);
        }

    }

    public function updateEvent(Request $request)
    {
        //dd($request->all());

        $this->validate($request, [
            'event' => 'required',
    		'date'  =>  'required',
        ]);
        
        $event       = Event::find($request->id);
        $event->event_name = $request->event;
    	$event->date_of_event = $request->date;

        if($event->save()){
            return redirect()->back()->with(['success' => 'Event successfully updated.']);
        }else{
            return redirect()->back()->with(['error`' => 'Failed to updated event']);
        }

    }

    public function deleteEvent(Request $request)
    {
        //dd($request->all());
        $event = Event::find($request->id);
        $event->delete();

        return back(); 
    }
}
