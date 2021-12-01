<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MembershipSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UserMembershipSeeder::class);
        $this->call(BlogPostSeeder::class);
    }
}
