<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TypeTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('types')->truncate();
        DB::table('types')->insert([
            'label' => 'Rouge'
        ]);
        DB::table('types')->insert([
            'label' => 'Blanc'
        ]);
        DB::table('types')->insert([
            'label' => 'Rosé'
        ]);
        DB::table('types')->insert([
            'label' => 'Mousseux'
        ]);
    }
}