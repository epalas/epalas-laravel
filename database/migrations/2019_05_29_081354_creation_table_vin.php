<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationTableVin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vins', function (Blueprint $table) { //nom de la table
            $table->increments('id');
            $table->integer('idCondi')->unsigned();
            $table->foreign('idCondi')->references('id')->on('condis')->onDelete('cascade');
            $table->integer('idProd')->unsigned();
            $table->foreign('idProd')->references('id')->on('prods')->onDelete('cascade');
            $table->integer('idType')->unsigned();
            $table->foreign('idType')->references('id')->on('types')->onDelete('cascade');
            $table->integer('idStock')->unsigned();
            $table->foreign('idStock')->references('id')->on('stocks')->onDelete('cascade');
            $table->string('nom');
            $table->integer('annee');
            $table->text('description');
            $table->decimal('alcool',3,1);
            $table->string('apogee');
            $table->decimal("tempCons",3,1);
            $table->decimal("tempServ",3,1);
            $table->string('titre')->nullable();
            $table->boolean('finDeSerie');
            $table->boolean('estBio');
            $table->boolean('estPrimeur');
            $table->boolean('estPromo');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vins');
    }


}
