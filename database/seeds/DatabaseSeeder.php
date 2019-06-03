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
<<<<<<< HEAD
        //$this->call(DetcomdeTableSeeder::class);
=======
        $this->call(VinTableSeeder::class);
>>>>>>> 95192bcee17827426bee840bbda8a0dfc5fea8f9
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
<<<<<<< HEAD
        $this->call(VinTableSeeder::class);
=======
        $this->call(PaimTableSeeder::class);
        $this->call(ReducomdeTableSeeder::class);

>>>>>>> 95192bcee17827426bee840bbda8a0dfc5fea8f9
    }
}
