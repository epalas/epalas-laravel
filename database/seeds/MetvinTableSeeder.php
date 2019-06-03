<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetvinTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('metvins')->truncate();
        for ($i=1; $i < 26; $i++) { 
            $n = rand(1, 6);
            DB::table('metvins')->insert([
                'idMet' => $n,
                'idVin' => $i
            ]);
        }
    }
}