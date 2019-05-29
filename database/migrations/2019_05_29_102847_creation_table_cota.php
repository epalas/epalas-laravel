<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationTableCota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotas', function (Blueprint $table) { //nom de la table
                $table->increments('id');
                $table->integer('idVin')->unsigned();
                $table->foreign('idVin')->references('id')->on('vins')->onDelete('cascade');
                $table->string('nom');
                $table->integer('echelle');
                $table->integer('note');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotas');
    }
}
