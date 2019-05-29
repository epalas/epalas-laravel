<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CondiTableSeeder extends Seeder {

    public function run() {
        DB::table('condis')->delete();
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