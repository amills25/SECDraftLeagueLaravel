<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    protected $table = 'athletes';

    protected $fillable = ['name', 'team'];

    public function weeks()
    {
        return $this->hasMany(Week::class);
    }
}
