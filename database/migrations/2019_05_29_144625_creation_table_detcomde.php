<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class  CreationTableDetcomde extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detcomdes', function (Blueprint $table){ //nom de la table
                $table->integer('idVin')->unsigned();
                $table->foreign('idVin')->references('id')->on('vins')->onDelete('cascade');
               	$table->integer('idComde')->unsigned();
		$table->integer('idUtilComde')->unsigned();
                $table->foreign(['idUtilComde','idComde'])->references(['idUtil','id'])->on('comdes')->onDelete('cascade');

                $table->tinyInteger('quantite');
                $table->decimal('prixUnite',6,3);
                $table->decimal('prixInterm',7,3);
                $table->primary(['idComde','idUtilComde','idVin']);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detcomdes');
    }
}
