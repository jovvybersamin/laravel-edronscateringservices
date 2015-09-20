<?php

namespace App\Http\Controllers\Admin\Events;

use Illuminate\Http\Request;

use App\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\EventRequest;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index',compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.edit',compact('event'));
    }

    public function store(EventRequest $request)
    {
        $event = Event::create($request->all());
        flash()->message('Successfully added new event: ' . $event->name,'success');
        return redirect()->route('admin.events.edit',$event->id);
    }

    public function update($id,EventRequest $request)
    {
        $event = Event::findOrFail($id);
        $event->update($request->all());
        flash()->message('Successfully updated event: ' . $event->name,'success');
        return redirect()->route('admin.events.edit',$event->id);
    }

    public function destroy()
    {

    }

}
