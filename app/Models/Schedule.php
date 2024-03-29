<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'time',
        'day',
        'month',
        'year',
    ];
    public function ticket():HasOne
    {
        return $this->hasOne(Ticket::class);
    }
    public function event():HasOne
    {
        return $this->hasOne(Events::class);
    }
}
