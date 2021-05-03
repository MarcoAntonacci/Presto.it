<?php

namespace Database\Seeders;

use Database\Seeders\ImgSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\IconSeeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call([
            CategorySeeder::class && IconSeeder::class && ImgSeeder::class,
        ]);
        
    }
}
