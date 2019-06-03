<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UtilTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('utils')->truncate();
        DB::table('utils')->insert([
            'nom' => 'Bobby',
            'prenom' => 'Bob',
            'email' => 'bob@gmail.com',
            'mdp' => 'bobbybob',
            'adresse' => 'Rue du Bob 12',
            'cp' => '1400',
            'ville' => 'Yverdon',
            'pays' => 'Suisse',
            'admin' => true,
            'urlPhoto' => 'http://www.bobthebuilder.com/fr-fr'
        ]);
        DB::table('utils')->insert([
            'nom' => 'Suzi',
            'prenom' => 'Gutenmorgen',
            'email' => 'kommwirspielen@gmail.com',
            'mdp' => 'bobbybob',
            'adresse' => 'Rue de Suzi 19',
            'cp' => '1400',
            'ville' => 'Yverdon',
            'pays' => 'Suisse',
            'admin' => true,
            'urlPhoto' => 'http://www.bobthebuilder.com/fr-fr'
        ]); 
    }
}