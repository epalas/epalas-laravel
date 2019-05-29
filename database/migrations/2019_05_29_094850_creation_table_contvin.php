<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationTableContvin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contvins', function (Blueprint $table) { //nom de la table
                $table->integer('idCont')->unsigned();
                $table->foreign('idCont')->references('id')->on('conts')->onDelete('cascade');
                $table->integer('idVin')->unsigned();
                $table->foreign('idVin')->references('id')->on('vins')->onDelete('cascade');
                $table->primary(['idCont','idVin']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contvins');
    }
}
