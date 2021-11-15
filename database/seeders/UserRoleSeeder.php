<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
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
            $role = Role::all()->random();
            $userRole = new UserRole();
            $userRole->user_id = $users[$i]['id'];
            $userRole->role_id = $role->id;
            $userRole->save();
        }
    }
}
