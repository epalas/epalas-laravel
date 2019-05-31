<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PaimTableSeeder extends Seeder {

    public function run() {
        DB::table('paims')->delete();
            $n = rand(10, 300);
            DB::table('paims')->insert([
                'idComde' => 1,
                'idUtilComde' => 1,
                'type' => 'Carte de crédit',
            ]);
    }
}

