<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CepaTableSeeder extends Seeder {

    public function run() {
        DB::table('cepas')->delete();
        DB::table('cepas')->insert([
            'label' => 'Merlot'
        ]);
        DB::table('cepas')->insert([
            'label' => 'Cabernet Sauvignon'
        ]);
        DB::table('cepas')->insert([
            'label' => 'Cabernet Franc'
        ]);
        DB::table('cepas')->insert([
            'label' => 'Petit Verdot'
        ]);
        DB::table('cepas')->insert([
            'label' => 'Sémillon'
        ]);
        DB::table('cepas')->insert([
            'label' => 'Sauvignon'
        ]);
        DB::table('cepas')->insert([
            'label' => 'Muscadelle'
        ]);
        DB::table('cepas')->insert([
            'label' => 'Cabernet Franc'
        ]);
    }
}