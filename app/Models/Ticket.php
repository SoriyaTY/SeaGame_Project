<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'zone',
        'address',
        'user_id',
        'event_id',
        'schedule_id',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function event():BelongsTo
    {
        return $this->belongsTo(Events::class);
    }
    
    public function schedule():BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }
    
    public function eventTeam()
    {
        return $this->belongsToMany(EventTeam::class);
    }

    public static function store($request,$id=null){
        $ticket = $request->only(['price','zone','address','user_id','event_id','schedule_id']);
        $ticket = self::updateOrCreate(['id'=>$id],$ticket);
        return $ticket;
    }
}
