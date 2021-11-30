<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
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
            $role = new Role;
            $role->label = $roleArray[$i];
            $role->save();
        }
    }
}
