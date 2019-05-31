<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContvinTableSeeder extends Seeder {

    public function run() {
        DB::table('contvins')->delete();
        for ($i=1; $i < 26; $i++) { 
            $n = rand(15, 20);
            DB::table('contvins')->insert([
                'idCont' => $n,
                'idVin' => $i
            ]);
        }
    }
}