<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('conts')->truncate();
        DB::table('conts')->insert([
            'label' => 'Bouteille',
            'volume' => 0.75,
        ]);
        DB::table('conts')->insert([
            'label' => 'Magnum',
            'volume' => 1.5,
        ]);
        DB::table('conts')->insert([
            'label' => 'Jéroboam',
            'volume' => 3,
        ]);
        DB::table('conts')->insert([
            'label' => 'Réhoboam',
            'volume' => 4.5,
        ]);
        DB::table('conts')->insert([
            'label' => 'Réhoboam',
            'volume' => 4.5,
        ]);
        DB::table('conts')->insert([
            'label' => 'Mathusalem',
            'volume' => 6,
        ]);
    }
}