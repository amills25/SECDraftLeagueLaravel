<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Membership;
use App\Models\UserMembership;
use Illuminate\Database\Seeder;

class UserMembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all()->toArray();
        for ($i = 0; $i < count($users); $i++) {
            $membership = Membership::all()->random();
            $userMembership = new UserMembership();
            $userMembership->user_id = $users[$i]['id'];
            $userMembership->membership_id = $membership->id;
            $userMembership->save();
        }
    }
}
