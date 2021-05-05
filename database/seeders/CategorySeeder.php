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
            0 => ['Veicoli', 'Vehicles', 'Vehículos', '/img/categories/veicoli.jpg', 'fas fa-car-side'], 
            1 => ['Abbigliamento', 'Apparel', 'Ropa', '/img/categories/abbigliamento..jpg', 'fas fa-tshirt'], 
            2 => ['Articoli per la casa', 'Household Items', 'Artículos del hogar', '/img/categories/articolicasa.jpeg', 'fas fa-chair'], 
            3 => ['Articoli sportivi', 'Sports items', 'Artículos deportivos', '/img/categories/articolisportivi.jpeg', 'fas fa-running'], 
            4 => ['Elettronica', 'Electronics', 'Electrónica', '/img/categories/elettronica.jpeg', 'fas fa-mobile-alt'], 
            5 => ['Giocattoli e videogiochi', 'Toys and video games', 'Juguetes y videojuegos', '/img/categories/videogames.jpeg', 'fas fa-gamepad'], 
            6 => ['Immobili', 'Realty', 'Propiedades', '/img/categories/immobili.jpeg', 'fas fa-home'], 
            7 => ['Giardino ed esterni', 'Garden and exteriors', 'Jardín y exteriores', '/img/categories/giardini.jpeg', 'fas fa-tree'], 
            8 => ['Articoli per animali', 'Articles for animals', 'Artículos para animales', '/img/categories/animali.jpeg', 'fas fa-paw'], 
            9 => ['Hobby', 'Vehicles', 'Pasatiempo', '/img/categories/hobby.jpeg', 'fas fa-music'], 
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name'=>$category[0],
                'nameEN'=>$category[1],
                'nameES'=>$category[2],
                'img'=>$category[3],
                'icon'=>$category[4],
            ]);
        }
    }
}
