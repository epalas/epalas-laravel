<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DetcomdeTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('detcomdes')->truncate();
        for ($i=1; $i < 38; $i++) {
            $n = rand(10, 300);
            DB::table('detcomdes')->insert([
                'idVin' => $i,
                'idComde' => 1,
                'idUtilComde' => 1,
                'quantite' => 6,
                'prixUnite' => $n,
                'prixInterm' => $n - 10
            ]);
        }
    }
}