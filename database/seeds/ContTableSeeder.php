<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContTableSeeder extends Seeder {

    public function run() {
        DB::table('conts')->delete();
        DB::table('conts')->insert([
            'label' => 'Bouteille',
            'volumeEnL' => 0.75,
        ]);
        DB::table('conts')->insert([
            'label' => 'Magnum',
            'volumeEnL' => 1.5,
        ]);
        DB::table('conts')->insert([
            'label' => 'Jéroboam',
            'volumeEnL' => 3,
        ]);
        DB::table('conts')->insert([
            'label' => 'Réhoboam',
            'volumeEnL' => 4.5,
        ]);
        DB::table('conts')->insert([
            'label' => 'Réhoboam',
            'volumeEnL' => 4.5,
        ]);
        DB::table('conts')->insert([
            'label' => 'Mathusalem',
            'volumeEnL' => 6,
        ]);
    }
}