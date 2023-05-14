<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country',
        'member'
    ];

    public function eventTeam()
    {
        return $this->belongsToMany(EventTeam::class,'eventTeam');
    }

    public static function store($request, $id=null){
        $team = $request->only(['name','country','member']);
        $team = self::updateOrCreate(['id'=>$id],$team);
        return $team;
    }
}
