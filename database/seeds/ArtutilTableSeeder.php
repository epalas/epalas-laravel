<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ArtutilTableSeeder extends Seeder {

    public function run() {
        DB::table('artutils')->delete();
        for ($i=1; $i < 26; $i++) { 
            $n = rand(5, 6);
            DB::table('artutils')->insert([
                'idArt' => $i,
                'idUtil' => $n,
            ]);
        }
    }
}	