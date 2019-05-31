<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CotaTableSeeder extends Seeder {

    public function run() {
        DB::table('cotas')->delete();
        for ($i=1; $i < 26; $i++) { 
            $n = rand(50, 99);
            DB::table('cotas')->insert([
                'idVin' => $i,
                'nom' => "Parker",
                'echelle' => 100,
                'note' => $n
            ]);
        }
    }
}