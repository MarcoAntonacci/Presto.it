<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories=['veicoli', 'abbigliamento', 'articoli per la casa', 'articoli sportivi', 'elettronica', 'giocattoli e videogiochi', 'immobili','giardino ed esterni', 'articoli per animali','hobby'];
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name'=>$category,

            ]);
        }
    }
}
