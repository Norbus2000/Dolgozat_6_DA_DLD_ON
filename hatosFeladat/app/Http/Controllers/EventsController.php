<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events=response()->json(Events::all());
        return $events;
    }

    public function show($id)
    {
        $event=response()->json(Events::find($id));
        return $event;
    }

    public function destroy($id)
    {
        Events::find($id)->delete();
        return redirect('/event/list');
    }

    public function update(Request $request, $id)
    {
        $event=Events::find($id);
        $event->date=$request->date;
        $event->agency_id=$request->agency_id;
        $event->limit=$request->limit;
        $event->save();
        return redirect('/event/list');
    }

    public function store(Request $request)
    {
        $event=new Events();
        $event->date=$request->date;
        $event->agency_id=$request->agency_id;
        $event->limit=$request->limit;
        $event->save();
        return redirect('/event/list');
    }

    public function newView()
    {
        $events=Events::all();
        return view('event.new', ['events'=>$events]);
    }

    public function editView($id)
    {
        $event=Events::find($id);
        return view('event.edit', ['event'=>$event]);
    }

    public function listView()
    {
        $events = Events::all();
        return view('event.list', ['events' => $events]);
    }
  

}
