<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class  CreationTableFich extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichs', function (Blueprint $table){ //nom de la table
                $table->increments('id');
                $table->integer('idArt')->unsigned();
                $table->foreign('idArt')->references('id')->on('arts')->onDelete('cascade');
                $table->string('format');
                $table->string('url');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichs');
    }
}
