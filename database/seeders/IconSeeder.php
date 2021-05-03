<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $icons=['fas fa-car-side', 'fas fa-tshirt', 'fas fa-chair', 'fas fa-running', 'fas fa-mobile-alt', 'fas fa-gamepad', 'fas fa-home', 'fas fa-tree', 'fas fa-paw'];

        foreach ($icons as $icon){
            DB::table('categories')->insert([
                'icon'=>$icon,
            ]);
        }
    }
}
