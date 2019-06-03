<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReducomdeTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('reducomdes')->truncate();
        for ($i=1; $i < 5; $i++) {
            DB::table('reducomdes')->insert([
                'idRedu'=> $i,
                'idComde' => 1,
                'idUtilComde' => 1
            ]);
        }
    }
}