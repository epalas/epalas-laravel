<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('mets')->truncate();
        DB::table('mets')->insert([
            'label' => 'Viande rouge'
        ]);
        DB::table('mets')->insert([
            'label' => 'Gibier à plumes'
        ]);
        DB::table('mets')->insert([
            'label' => 'Volaille'
        ]);
        DB::table('mets')->insert([
            'label' => 'Apéritif'
        ]);
        DB::table('mets')->insert([
            'label' => 'Poisson'
        ]);
        DB::table('mets')->insert([
            'label' => 'Pâtes'
        ]);
    }
}