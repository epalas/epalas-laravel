<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StockTableSeeder extends Seeder {

    public function run() {
        DB::table('stocks')->delete();
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