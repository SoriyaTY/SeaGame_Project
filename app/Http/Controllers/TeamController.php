<?php

namespace App\Http\Controllers;

use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $team = Team::all();
        $team = TeamResource::collection($team);
        return response()->json(['success'=>true,'data'=>$team]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $team = Team::store($request);
        return response()->json(['success'=>true,'data'=>$team]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $team = Team::find($id);
        $team = new TeamResource($team);
        return response()->json(['success'=>true,'data'=>$team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $team = Team::store($request,$id);
        return response()->json(['success'=>true,'data'=>$team]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $team = Team::find($id)->delete();
        return response()->json(['success'=>true,'data'=>$team]);
    }

}
