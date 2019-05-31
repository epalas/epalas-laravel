<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FavoTableSeeder extends Seeder {

    public function run() {
        DB::table('favos')->delete();
        for ($i=1; $i < 26; $i++) { 
            $n = rand(5, 6);
            DB::table('favos')->insert([
                'idUtil' => $n,
                'idVin' => $i
            ]);
        }
    }
}