<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationTableFavo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favos', function (Blueprint $table) { //nom de la table
                $table->integer('idUtil')->unsigned();
                $table->foreign('idUtil')->references('id')->on('conts')->onDelete('cascade');
                $table->integer('idVin')->unsigned();
                $table->foreign('idVin')->references('id')->on('vins')->onDelete('cascade');
                $table->primary(['idUtil','idVin']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favos');
    }
}
