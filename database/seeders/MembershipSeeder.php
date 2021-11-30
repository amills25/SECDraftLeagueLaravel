<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Membership;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $membershipArray = ['Commissioner', 'Member'];
        for ($i = 0; $i < count($membershipArray); $i++) {
            $membership = new Membership;
            $membership->label = $membershipArray[$i];
            $membership->save();
        }
    }
}
