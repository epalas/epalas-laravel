<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReducomdeTableSeeder extends Seeder {

    public function run() {
        DB::table('reducomdes')->delete();
        for ($i=10; $i < 14; $i++) {
            DB::table('reducomdes')->insert([
                'idRedu'=> $i,
                'idComde' => 1,
                'idUtilComde' => 1
            ]);
        }
    }
}