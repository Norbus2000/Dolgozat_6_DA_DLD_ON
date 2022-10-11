<?php

namespace App\Http\Controllers;

use App\Models\Participates;
use Illuminate\Http\Request;

class ParticipatesController extends Controller
{
    public function index()
    {
        $participates=response()->json(Participates::all());
        return $participates;
    }

    public function show($id)
    {
        $participate=response()->json(Participates::find($id));
        return $participate;
    }

    public function destroy($id)
    {
        Participates::find($id)->delete();
        return redirect('/participate/list');
    }

    public function update(Request $request, $id)
    {
        $participate=Participates::find($id);
        $participate->present=$request->present;
        $participate->save();
        return redirect('/participate/list');
    }

    public function store(Request $request)
    {
        $participate=new Participates();
        $participate->event_id=$request->event_id;
        $participate->user_id=$request->user_id;
        $participate->present=$request->present;
        $participate->save();
        return redirect('/participate/list');
    }
}
