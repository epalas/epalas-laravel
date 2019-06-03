<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProdTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('prods')->truncate();
        DB::table('prods')->insert([
            'nom' => 'Château Respide-Médeville',
            'pays' => 'France',
            'region' => 'Bordeaux',
            'url' => 'http://www.gonet-medeville.com/'
        ]);
        DB::table('prods')->insert([
            'nom' => 'Château Grand Corbin-Despagne',
            'pays' => 'France',
            'region' => 'Bordeaux',
            'url' => 'http://www.grand-corbin-despagne.com/'
        ]);
        DB::table('prods')->insert([
            'nom' => 'Château Lynch-Moussas',
            'pays' => 'France',
            'region' => 'Bordeaux',
            'url' => 'http://www.lynch-moussas.com/'
        ]);
        DB::table('prods')->insert([
            'nom' => 'Château les Justices',
            'pays' => 'France',
            'region' => 'Bordeaux',
            'url' => 'http://www.gonet-medeville.com/'
        ]);
        DB::table('prods')->insert([
            'nom' => 'Château Boyd-Cantenac',
            'pays' => 'France',
            'region' => 'Bordeaux',
            'url' => 'http://www.boyd-cantenac.fr/'
        ]);
    }
}