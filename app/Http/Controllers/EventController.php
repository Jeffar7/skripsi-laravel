<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function eventdetail(Event $event)
    {
        return view('/events/event_detail', compact('event'));
    }

    public function event()
    {
        $events = Event::all();
        return view('/events/events', compact('events'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('/events/manageevents', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all();
        return view('/events/addevent', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'theme' => 'required',
            'website' => 'required',
            'capacity' => 'required',
            'held_on' => 'required',
            'about_us' => 'required|string',
            'picture' => 'required|file',
        ]);

        $event = new Event();
        $event->name = $request->name;
        $event->theme = $request->theme;
        $event->website = $request->website;
        $event->capacity = $request->capacity;
        $event->held_on = $request->held_on;
        $event->about_us = $request->about_us;
        // $event->picture = $request->picture;

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filenameWithoutExt = $file->getClientOriginalName();
            $filenamesave = $filenameWithoutExt;
            $file->storeAs('public/images/Events/', $filenamesave);
            $event->picture = $filenamesave;
        } else {
            return $request;
            $event->picture = '';
        }

        $event->save();
        return redirect('/manageevent')->with('status', 'Event Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('/events/editevent', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filenameWithoutExt = $file->getClientOriginalName();
            $filenamesave = $filenameWithoutExt;
            $file->storeAs('public/images/Events/', $filenamesave);
            $event->picture = $filenamesave;
        } else {
            return $request;
            $event->picture = '';
        }

        Event::where('id', $event->id)->update([
            'name' => $request->name,
            'theme' => $request->theme,
            'website' => $request->website,
            'capacity' => $request->capacity,
            'held_on' => $request->held_on,
            'picture' => $event->picture,
            'about_us' => $event->about_us
        ]);

        return redirect('/manageevent')->with('status', 'Event successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        Event::destroy($event->id);
        return redirect('manageevent')->with('status', 'Event successfully deleted!');
    }
}
