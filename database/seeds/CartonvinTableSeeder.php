<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CartonvinTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('cartonvins')->truncate();
        for ($i=1; $i < 38; $i++) {
            $n = rand(1, 3);
            DB::table('cartonvins')->insert([
                'idCarton' => $n,
                'idVin' => $i
            ]);
        }
    }
}