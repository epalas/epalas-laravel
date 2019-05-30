<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class  CreationTableArtutil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artutils', function (Blueprint $table){ //nom de la table
                $table->integer('idArt')->unsigned();
                $table->foreign('idArt')->references('id')->on('arts')->onDelete('cascade');
                $table->integer('idUtil')->unsigned();
                $table->foreign('idUtil')->references('id')->on('utils')->onDelete('cascade');
                $table->primary(['idUtil','idArt']);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artutils');
    }
}
