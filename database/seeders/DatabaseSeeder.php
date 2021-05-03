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
        $categories=['Veicoli', 'Abbigliamento', 'Articoli per la casa', 'Articoli sportivi', 'Elettronica', 'Giocattoli e videogiochi', 'Immobili','Giardino ed esterni', 'Articoli per animali','Hobby'];
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name'=>$category,

            ]);
        }
    }
}
