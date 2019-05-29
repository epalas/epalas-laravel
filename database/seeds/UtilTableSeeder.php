<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UtilTableSeeder extends Seeder {

    public function run() {
        DB::table('utils')->delete();
        DB::table('utils')->insert([
            'nom' => 'Bobby',
            'prenom' => 'Bob',
            'email' => 'bob@gmail.com',
            'motDePasse' => 'bobbybob',
            'adresse' => 'Rue du Bob 12',
            'cp' => '1400',
            'ville' => 'Yverdon',
            'pays' => 'Suisse',
            'admin' => 0,
            'urlPhoto' => 'http://www.bobthebuilder.com/fr-fr'
        ]);
        DB::table('utils')->insert([
            'nom' => 'Suzi',
            'prenom' => 'Gutenmorgen',
            'email' => 'kommwirspielen@gmail.com',
            'motDePasse' => 'bobbybob',
            'adresse' => 'Rue de Suzi 19',
            'cp' => '1400',
            'ville' => 'Yverdon',
            'pays' => 'Suisse',
            'admin' => 0,
            'urlPhoto' => 'http://www.bobthebuilder.com/fr-fr'
        ]); 
    }
}