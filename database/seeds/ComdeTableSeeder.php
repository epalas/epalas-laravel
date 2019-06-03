<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ComdeTableSeeder extends Seeder {

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('comdes')->truncate();
        $n = rand(10, 300);
        for ($i = 1; $i < 10; $i++) {

        DB::table('comdes')->insert([

            'id' => $i,
            'idUtil' => 1,
            'prixBrut' => $n,
            'prixNet' => $n,
            'prixTTC' => $n + ($n * 7.7) / 100,
            'adresseLivr' => 'Rue du Bob 12',
            'adresseFact' => 'Rue du Bob 12',
            'etat' => 'Envoyé',
            'date' => Carbon::parse('2019-05-31'),
        ]);
    }
    }
}	


