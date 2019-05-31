<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetvinTableSeeder extends Seeder {

    public function run() {
        DB::table('metvins')->delete();
        for ($i=1; $i < 26; $i++) { 
            $n = rand(15, 20);
            DB::table('metvins')->insert([
                'idMet' => $n,
                'idVin' => $i
            ]);
        }
    }
}