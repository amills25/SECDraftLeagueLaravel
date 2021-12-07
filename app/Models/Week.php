<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;

    protected $table = 'weeks';

    protected $fillable = ['athlete_id', 'lineup_id', 'points', 'week_number'];

    public function athlete()
    {
        return $this->belongsTo(Athlete::class);
    }

    public function lineup()
    {
        return $this->belongsTo(Lineup::class);
    }
}
