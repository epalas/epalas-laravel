<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReduTableSeeder extends Seeder {

    public function run() {
        DB::table('redus')->delete();
        DB::table('redus')->insert([
            'nom' => 'Saint Valentin',
            'pourcentage' => 14
        ]);
        DB::table('redus')->insert([
            'nom' => 'Noël',
            'pourcentage' => 50
        ]);
        DB::table('redus')->insert([
            'nom' => 'Black Friday',
            'pourcentage' => 70
        ]);
        DB::table('redus')->insert([
            'nom' => 'Anniversaire',
            'pourcentage' => 10
        ]);

    }
}