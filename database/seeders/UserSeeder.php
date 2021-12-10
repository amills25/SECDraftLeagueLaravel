<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            "Mike Mills",
            "Andrew Mills",
            "Joel Storrow",
            "Dylan Prezkop",
            "Clark Spencer",
            "Team Zimmer"
        ];
        $emails = [
            "millskysec@gmail.com",
            "awmills25@gmail.com",
            "joel.storrow@mcgillengineers.com",
            "dprez35@yahoo.com",
            "clark40ball@yahoo.com",
            "jzimmer@best-in-class.com"
        ];
        $passwords = [
            "Champ15!",
            "Slammy23!",
            "Heelmakers1",
            "Dprez304",
            "Miami305",
            "Wildcats1"
        ];

        for ($i = 0; $i < count($emails); $i++) {
            $user = new User();
            $user->name = $members[$i];
            $user->email = $emails[$i];
            $user->password = Hash::make($passwords[$i]);
            $user->save();
        }
    }
}
