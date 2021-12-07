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
        for ($i = 1; $i <= 6; $i++) {
            $lineup = new Lineup();
            $lineup->user_id = $i;
            $lineup->save();
        }
    }
}
