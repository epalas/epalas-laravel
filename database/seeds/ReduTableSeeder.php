<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReduTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('redus')->truncate();
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