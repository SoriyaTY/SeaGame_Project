<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventResource;
use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $event = Events::all();
        $event = Events::where('eventName','like','%'.request('eventName').'%')->get();
        $event = EventResource::collection($event);
        return response()->json(['success'=>true,'data'=>$event]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $event = Events::store($request);
        return response()->json(['success'=>true,'data'=>$event]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $event = Events::find($id);
        $event = new EventResource($event);
        return response()->json(['success'=>true,'data'=>$event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $event = Events::store($request, $id);
        return response()->json(['success'=>true,'data'=>$event]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $event = Events::find($id)->delete();
        return response()->json(['success'=>true,'data'=>$event]);
    }
}
