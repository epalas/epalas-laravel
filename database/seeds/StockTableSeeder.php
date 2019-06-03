<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StockTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('stocks')->truncate();
        DB::table('stocks')->insert([
            'nbrUnite' => 3
        ]);
        DB::table('stocks')->insert([
            'nbrUnite' => 15
        ]);
        DB::table('stocks')->insert([
            'nbrUnite' => 22
        ]);
        DB::table('stocks')->insert([
            'nbrUnite' => 18
        ]);
    }
}