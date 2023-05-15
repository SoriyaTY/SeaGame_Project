<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country',
        'member',
    ];

    public function events()
    {
        return $this->belongsToMany(Events::class,'event_teams')->withTimestamps();
    }

    public static function store($request, $id=null){
        $team = $request->only(['name','country','member']);
        $team = self::updateOrCreate(['id'=>$id],$team);
        return $team;
    }
}