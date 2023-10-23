<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\Category::create([
            "name" => "category 1",
            "description" => "ceci est une description du seeder"
        ]);

        \App\Models\Category::create([
            "name" => "category 2",
            "description" => "ceci est une description du seeder"
        ]);

        \App\Models\Category::create([
            "name" => "category 3",
            "description" => "ceci est une description du seeder"
        ]);
    }
}
