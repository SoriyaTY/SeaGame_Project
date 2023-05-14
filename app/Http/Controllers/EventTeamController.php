<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventTeamResource;
use App\Models\EventTeam;
use Illuminate\Http\Request;

class EventTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $eventTeam = EventTeam::all();
        $eventTeam = EventTeamResource::collection($eventTeam);
        return response()->json(['success'=>true,'data'=>$eventTeam]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $eventTeam = EventTeam::store($request);
        return response()->json(['success'=>true,'data'=>$eventTeam]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eventTeam = EventTeam::find($id);
        $eventTeam = new EventTeamResource($eventTeam);
        return response()->json(['success'=>true,'data'=>$eventTeam]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $eventTeam = EventTeam::store($request,$id);
        return response()->json(['success'=>true,'data'=>$eventTeam]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eventTeam = EventTeam::find($id)->delete();
        return response()->json(['success'=>true,'data'=>$eventTeam]);
    }
}
