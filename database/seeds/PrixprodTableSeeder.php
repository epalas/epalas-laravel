<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PrixprodTableSeeder extends Seeder {

    public function run() {
        DB::table('prixprods')->delete();
        for ($i=1; $i < 26; $i++) { 
            $n = rand(10, 300);
            DB::table('prixprods')->insert([
                'idVin' => $i,
                'a' => Carbon::parse('2019-02-14'),
                'de' => Carbon::parse('2019-02-15'),
                'prix' => $n
            ]);
            DB::table('prixprods')->insert([
                'idVin' => $i,
                'a' => Carbon::parse('2019-12-15'),
                'de' => Carbon::parse('2019-12-31'),
                'prix' => $n
            ]);
        }
    }
}