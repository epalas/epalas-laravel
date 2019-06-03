<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CondiTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('condis')->truncate();
        DB::table('condis')->insert([
            'nbrUnite' => 3,
            'type' => 'Caisse en bois'
        ]);
        DB::table('condis')->insert([
            'nbrUnite' => 3,
            'type' => 'Carton de 6'
        ]);

    }
}