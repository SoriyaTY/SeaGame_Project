<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $schedule = Schedule::all();
        return response()->json(['success'=>true,'data'=>$schedule]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $schedule = Schedule::create([
            'time'=>$request->time,
            'day'=>$request->day,
            'month'=>$request->month,
            'year'=>$request->year
        ]);
        return response()->json(['success'=>true,'data'=>$schedule]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $schedule = Schedule::find($id);
        return response()->json(['success'=>true,'data'=>$schedule]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $schedule = Schedule::find($id);
        $schedule->update([
            'time'=>$request->time,
            'day'=>$request->day,
            'month'=>$request->month,
            'year'=>$request->year
        ]);
        return response()->json(['success'=>true,'data'=>$schedule]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $schedule = Schedule::find($id)->delete();
        return response()->json(['success'=>true,'data'=>$schedule]);
    }

    public function schedules(Request $request){
        $schedule = Schedule::create([
            'schedule_id'=>$request('schedule_id'),
            'user_id'=>$request('user_id'),
        ]);
        return response()->json(['success'=>true,'data'=>$schedule]);
    }
}
