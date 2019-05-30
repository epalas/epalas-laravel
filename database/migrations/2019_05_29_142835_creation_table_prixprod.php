<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class  CreationTablePrixprod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prixprods', function (Blueprint $table){ //nom de la table
                $table->integer('idVin')->unsigned();
                $table->foreign('idVin')->references('id')->on('vins')->onDelete('cascade');
                $table->timestamp('a');
		$table->timestamp('de')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->decimal('prix',6,2);
                $table->primary(['de','a','idVin']);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prixprods');
    }
}
