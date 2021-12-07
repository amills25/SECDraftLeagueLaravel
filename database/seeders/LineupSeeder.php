<?php

namespace Database\Seeders;

use App\Models\Lineup;
use Database\Factories\LineupFactory;
use Illuminate\Database\Seeder;

class LineupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lineup::factory()
            ->count(6)
            ->create();
    }
}
