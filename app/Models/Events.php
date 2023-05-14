<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Events extends Model
{
    use HasFactory;
    protected $fillable = [
        'eventName',
        'description',
        'schedule_id',
        'user_id',
    ];

    public function ticket():HasOne
    {
        return $this->hasOne(Ticket::class);
    }

    public function schedule():BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function eventTeam()
    {
        return $this->belongsToMany(EventTeam::class,'eventTeam');
    }

    public static function store($request, $id=null){
        $event = $request->only(['eventName','description','schedule_id','user_id']);
        $event = self::updateOrCreate(['id'=>$id],$event);
        return $event;
    }
}
