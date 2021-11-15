<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role;
        $role->label = "Superuser";
        $role->save();
        $role->label = "Librarian";
        $role->save();
        $role->label = "Cardholder";
        $role->save();
        $this->call(BookSeeder::class);
    }
}
