<?php

namespace Database\Seeders;

use App\Models\Week;
use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($k = 1; $k <= 10; $k++) {
            for ($i = 1; $i <= 6; $i++) {
                for ($j = 1; $j <= 9; $j++) {
                    $week = new Week();
                    $week->athlete_id = 9 * ($i - 1) + $j;
                    $week->lineup_id = $i;
                    $week->points = 0;
                    $week->week_number = $k;
                    $week->save();
                }
            }
        }
    }
}
