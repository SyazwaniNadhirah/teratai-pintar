<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where(auth()->user()->role =='1');
        $events = Event::All();
        return view('admin.event.index', compact('events'));
    }

    public function display()
    {
        $events = Event::All();
        return view('user.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.event.index', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Event::create($request->all());
        return redirect()->route('event.index')->with('success', 'Event Successfully Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('event.index', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->save();
        return redirect()->route('event.index')->with('success', ' Event Program  Successfuly Updated!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
