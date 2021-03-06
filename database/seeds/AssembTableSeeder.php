<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AssembTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('assembs')->truncate();
        for ($i=1; $i < 38; $i++) {
        $n = rand(1, 8); 
            DB::table('assembs')->insert([
                'idCepa' => $n,
                'idVin' => $i
            ]);
        }
    }
}