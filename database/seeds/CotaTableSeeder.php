<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CotaTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('cotas')->truncate();
        for ($i=1; $i < 38; $i++) {
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