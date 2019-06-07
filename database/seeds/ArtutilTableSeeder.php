<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ArtutilTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('artutils')->truncate();
        for ($i=1; $i < 38; $i++) {
            $n = rand(1, 2);
            DB::table('artutils')->insert([
                'idArt' => $i,
                'idUtil' => $n,
            ]);
        }
    }
}	