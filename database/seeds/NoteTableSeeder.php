<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NoteTableSeeder extends Seeder {

    public function run() {
        DB::table('notes')->delete();
        for ($i=1; $i < 26; $i++) { 
            $n = rand(5, 6);
            $e = rand(1,6);
            DB::table('notes')->insert([
                'idVin' => $i,
                'idUtil' => $n,
                'nbrEtoiles' => $e
            ]);
        }
    }
}