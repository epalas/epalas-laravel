<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProdTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('prods')->truncate();
        // 1
        DB::table('prods')->insert([
            'nom' => 'Château Respide-Médeville',
            'pays' => 'France',
            'region' => 'Alsace',
            'url' => 'http://www.gonet-medeville.com/'
        ]);
        // 2
        DB::table('prods')->insert([
            'nom' => 'Château Grand Corbin-Despagne',
            'pays' => 'France',
            'region' => 'Bordeaux',
            'url' => 'http://www.grand-corbin-despagne.com/'
        ]);
        // 3
        DB::table('prods')->insert([
            'nom' => 'Château Lynch-Moussas',
            'pays' => 'France',
            'region' => 'Bourgogne',
            'url' => 'http://www.lynch-moussas.com/'
        ]);
        // 4
        DB::table('prods')->insert([
            'nom' => 'Château les Justices',
            'pays' => 'France',
            'region' => 'Beaujolais',
            'url' => 'http://www.gonet-medeville.com/'
        ]);
        // 5
        DB::table('prods')->insert([
            'nom' => 'Castello Lavare',
            'pays' => 'Italie',
            'region' => 'Abruzzes',
            'url' => 'http://www.castellolavare.it/'
        ]);
        // 6
        DB::table('prods')->insert([
            'nom' => 'Castello Bella Ciao',
            'pays' => 'Italie',
            'region' => 'Piémont',
            'url' => 'http://www.castellobellaciao.it/'
        ]);
        // 7
        DB::table('prods')->insert([
            'nom' => 'Castello di Pedro',
            'pays' => 'Italie',
            'region' => 'Toscane',
            'url' => 'http://www.castellodipedro.it/'
        ]);
        // 8
        DB::table('prods')->insert([
            'nom' => 'Castello di Pedro',
            'pays' => 'Italie',
            'region' => 'Toscane',
            'url' => 'http://www.castellodipedro.it/'
        ]);
        // 9
        DB::table('prods')->insert([
            'nom' => 'Eyholzer Roter',
            'pays' => 'Suisse',
            'region' => 'Valais',
            'url' => 'http://www.schlussvonvisp.ch/'
        ]);
        // 10
        DB::table('prods')->insert([
            'nom' => 'Château des Portugais',
            'pays' => 'Suisse',
            'region' => 'Vaud',
            'url' => 'http://www.chateaudesportugais.ch/'
        ]);
    }
}