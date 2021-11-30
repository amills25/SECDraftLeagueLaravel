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
        $userMembership = new UserMembership();
        $userMembership->user_id = $users[0]['id'];
        $userMembership->membership_id = 1;
        $userMembership->save();
        for ($i = 1; $i < count($users); $i++) {
            $userMembership = new UserMembership();
            $userMembership->user_id = $users[$i]['id'];
            $userMembership->membership_id = 2;
            $userMembership->save();
        }
    }
}
