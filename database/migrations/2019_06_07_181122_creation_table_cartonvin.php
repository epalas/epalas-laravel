<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationTableCartonvin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartonvins', function (Blueprint $table) { //nom de la table
            $table->integer('idCarton')->unsigned();
            $table->foreign('idCarton')->references('id')->on('cartons')->onDelete('cascade');
            $table->integer('idVin')->unsigned();
            $table->foreign('idVin')->references('id')->on('vins')->onDelete('cascade');
            $table->primary(['idCarton','idVin']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartonvins');
    }
}
