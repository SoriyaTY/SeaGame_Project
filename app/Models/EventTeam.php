<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventTeam extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'team_id'
    ];
    
    public function event():BelongsTo
    {
        return $this->belongsTo(Events::class);
    }

    public function team():BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public static function store($request, $id=null){
        $eventTeam = $request->only(['event_id','team_id']);
        $eventTeam = self::updateOrCreate(['id'=>$id],$eventTeam);
        return $eventTeam;
    }
}
