<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class  CreationTableComde extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comdes', function (Blueprint $table){ //nom de la table
                $table->integer('id')->unsigned();
                $table->integer('idUtil')->unsigned();
                $table->foreign('idUtil')->references('id')->on('utils')->onDelete('cascade');
                $table->decimal('prixBrut',7,3);
                $table->decimal('prixNet',7,3);
                $table->decimal('prixTTC',7,3);
                $table->string('adresseLivr');
                $table->string('adresseFact');
                $table->string('etat');
                $table->timestamp('date')->nullable();
                $table->primary(['idUtil','id']);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comdes');
    }
}
