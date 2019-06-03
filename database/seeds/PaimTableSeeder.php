<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PaimTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('paims')->truncate();
            $n = rand(10, 300);
            DB::table('paims')->insert([
                'idComde' => 1,
                'idUtilComde' => 1,
                'type' => 'Carte de crédit',
            ]);
    }
}

