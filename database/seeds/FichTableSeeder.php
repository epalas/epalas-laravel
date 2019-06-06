<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FichTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('fichs')->truncate();
        for ($i=1; $i < 38; $i++) {
            $n = rand(5, 6);
            DB::table('fichs')->insert([
                'idArt' => $i,
                'format' => 'jpg',
                'url' => "https://www.daniel-vins.ch/media/bordeaux_primeurs_2012_degustation/IMG_8100.jpg",
            ]);
        }
    }
}	