<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FichTableSeeder extends Seeder {

    public function run() {
        DB::table('fichs')->delete();
        for ($i=1; $i < 26; $i++) { 
            $n = rand(5, 6);
            DB::table('fichs')->insert([
                'idArt' => $i,
                'format' => 'jpg',
                'url' => "https://www.daniel-vins.ch/media/bordeaux_primeurs_2012_degustation/IMG_8100.jpg",
            ]);
        }
    }
}	