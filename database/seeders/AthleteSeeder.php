<?php

namespace Database\Seeders;

use App\Models\Athlete;
use Illuminate\Database\Seeder;

class AthleteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 54; $i++) {
            $athlete = new Athlete();
            $athlete->active = false;
            $athlete->name = '';
            $athlete->team = '';
            $athlete->save();
        }
    }
}
