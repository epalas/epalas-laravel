<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('comms')->truncate();
        for ($i=1; $i < 26; $i++) { 
            $n = rand(5, 6);
            DB::table('comms')->insert([
                'idVin' => $i,
                'idUtil' => $n,
                'titre' => "Super ce vin !",
                'contenu' => "J'ai beaucoup aimé ce vin qui a un petit goût de noisette grillée",
                'date' => Carbon::parse('2019-12-' . $i)
            ]);
        }
    }
}