<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images=['/img/categories/veicoli.jpg', '/img/categories/abbigliamento..jpg', '/img/categories/articolicasa.jpeg', '/img/categories/articolisportivi.jpeg', '/img/categories/elettronica.jpeg', '/img/categories/videogames.jpeg', '/img/categories/immobili.jpeg', '/img/categories/giardini.jpeg', '/img/categories/animali.jpeg', '/img/categories/hobby.jpeg'];

        foreach ($images as $image){
            DB::table('categories')->insert([
                'img'=>$image,
            ]);
        }
    }
}
