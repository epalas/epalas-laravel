<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ComdeTableSeeder extends Seeder {

    public function run() {
        DB::table('comdes')->delete();
        $n = rand(10, 300);
            DB::table('comdes')->insert([
                'idUtil' => 5,
                'prixBrut' => $n,
                'prixNet' => $n,
                'prixTTC' => $n + ($n * 7.7)/100,
                'adresseLivr' => 'Rue du Bob 12',
                'adresseFact' => 'Rue du Bob 12',
                'etat' => 'Envoyé',
                'date' => Carbon::parse('2019-05-31'),
            ]);
    }
}	


