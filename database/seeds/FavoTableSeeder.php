<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FavoTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('favos')->truncate();
        for ($i=1; $i < 26; $i++) { 
            $n = rand(1, 2);
            DB::table('favos')->insert([
                'idUtil' => $n,
                'idVin' => $i
            ]);
        }
    }
}