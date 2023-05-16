<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\eventTeamController;
use App\Http\Controllers\EventTeamController as ControllersEventTeamController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TickerController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Users
Route::get('getUsers',[UserController::class,'index']);
Route::post('addUsers',[UserController::class,'store']);
Route::get('getOneUser/{id}',[UserController::class,'show']);
Route::put('updateUser/{id}',[UserController::class,'update']);
Route::delete('deleteUser/{id}',[UserController::class,'destroy']);

//Teams
Route::get('getTeams',[TeamController::class,'index']);
Route::post('addTeam',[TeamController::class,'store']);
Route::get('getTeam/{id}',[TeamController::class,'show']);
Route::put('updateTeam/{id}',[TeamController::class,'update']);
Route::delete('deleteTeam/{id}',[TeamController::class,'destroy']);
Route::post('addEventTeam',[TeamController::class,'eventTeam']);

//Tickets
Route::get('getTickets',[TickerController::class,'index']);
Route::post('addTicket',[TickerController::class,'store']);
Route::get('getTicket/{id}',[TickerController::class,'show']);
Route::put('updateTicket/{id}',[TickerController::class,'update']);
Route::delete('deleteTicket/{id}',[TickerController::class,'destroy']);

//Schedule
Route::get('getSchedule',[ScheduleController::class,'index']);
Route::post('addSchedule',[ScheduleController::class,'store']);
Route::get('getSchedule/{id}',[ScheduleController::class,'show']);
Route::put('updateSchedule/{id}',[ScheduleController::class,'update']);
Route::delete('deleteSchedule/{id}',[ScheduleController::class,'destroy']);

//Events
Route::get('getEvents',[EventsController::class,'index']);
Route::post('addEvents',[EventsController::class,'store']);
Route::get('getEvents/{id}',[EventsController::class,'show']);
Route::put('updateEvents/{id}',[EventsController::class,'update']);
Route::delete('deleteEvents/{id}',[EventsController::class,'destroy']);
