<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            0 => ['Veicoli', '/img/categories/veicoli.jpg', 'fas fa-car-side'], 
            1 => ['Abbigliamento', '/img/categories/abbigliamento..jpg', 'fas fa-tshirt'], 
            2 => ['Articoli per la casa', '/img/categories/articolicasa.jpeg', 'fas fa-chair'], 
            3 => ['Articoli sportivi', '/img/categories/articolisportivi.jpeg', 'fas fa-running'], 
            4 => ['Elettronica', '/img/categories/elettronica.jpeg', 'fas fa-mobile-alt'], 
            5 => ['Giocattoli e videogiochi', '/img/categories/videogames.jpeg', 'fas fa-gamepad'], 
            6 => ['Immobili', '/img/categories/immobili.jpeg', 'fas fa-home'], 
            7 => ['Giardino ed esterni', '/img/categories/giardini.jpeg', 'fas fa-tree'], 
            8 => ['Articoli per animali', '/img/categories/animali.jpeg', 'fas fa-paw'], 
            9 => ['Hobby', '/img/categories/hobby.jpeg', 'fas fa-music'], 
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name'=>$category[0],
                'img'=>$category[1],
                'icon'=>$category[2],
            ]);
        }
    }
}
