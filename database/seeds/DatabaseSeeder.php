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
        $this->call(ContTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(StockTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(CondiTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(CepaTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(TypeTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(ProdTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(MetTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(ReduTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(UtilTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(VinTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(AssembTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(ContvinTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(FavoTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(MetvinTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(CotaTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(PrixprodTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(NoteTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(CommTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(PhotoTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(ArtTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(FichTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(ArtutilTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(ComdeTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(DetcomdeTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(PaimTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(ReducomdeTableSeeder::class);
    }
}