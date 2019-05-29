<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationTableAssemb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assembs', function (Blueprint $table) { //nom de la table
		$table->integer('idCepa')->unsigned();
            $table->foreign('idCepa')->references('id')->on('cepas')->onDelete('cascade');
$table->integer('idVin')->unsigned();

            $table->foreign('idVin')->references('id')->on('vins')->onDelete('cascade');
            $table->primary(['idCepa','idVin']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assembs');
    }
}
