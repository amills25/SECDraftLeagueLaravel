<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserMembership;

class Membership extends Model
{
    use HasFactory;

    protected $table = 'memberships';

    public function userMemberships()
    {
        return $this->hasMany(UserMembership::class);
    }
}
