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
        //\App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Tag::factory(10)->create();
        \App\Models\Post::factory(5)->create();
        \App\Models\Image::factory(10)->create();
        \App\Models\Gallery::factory(5)->create();
    }
}
