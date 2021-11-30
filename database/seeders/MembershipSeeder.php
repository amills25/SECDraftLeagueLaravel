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
        $roleArray = ['Commissioner', 'Member'];
        for ($i=0; $i < count($roleArray); $i++) {
            $role = new Membership;
            $role->label = $roleArray[$i];
            $role->save();
        }
    }
}
