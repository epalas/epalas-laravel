<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(DetcomdeTableSeeder::class);
        $this->call(AssembTableSeeder::class);
        $this->call(ContvinTableSeeder::class);
        $this->call(FavoTableSeeder::class);
        $this->call(MetvinTableSeeder::class);
        $this->call(CotaTableSeeder::class);
        $this->call(PrixprodTableSeeder::class);
        $this->call(NoteTableSeeder::class);
        $this->call(CommTableSeeder::class);
        $this->call(PhotoTableSeeder::class);
        $this->call(ArtTableSeeder::class);
        $this->call(FichTableSeeder::class);
        $this->call(ArtutilTableSeeder::class);
        $this->call(ComdeTableSeeder::class);
        $this->call(DetcomdeTableSeeder::class);
        $this->call(VinTableSeeder::class);
    }
}
