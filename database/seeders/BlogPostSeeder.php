<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Database\Factories\BlogPostFactory;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogPost::factory()
        ->count(1)
        ->create();
    }
}
