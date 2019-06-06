<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class  CreationTablePhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table){ //nom de la table
                $table->increments('id');
                $table->string('url');
                $table->integer('idVin')->unsigned();
                $table->foreign('idVin')->references('id')->on('vins')->onDelete('cascade');
                $table->string('alt');
                $table->boolean('estGalerie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
