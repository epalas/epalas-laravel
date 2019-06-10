<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CartonTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('cartons')->truncate();

        DB::table('cartons')->insert([
            'nbrVins' => '3'
        ]);
        DB::table('cartons')->insert([
            'nbrVins' => '6'
        ]);
        DB::table('cartons')->insert([
            'nbrVins' => '12'
        ]);
    }
}