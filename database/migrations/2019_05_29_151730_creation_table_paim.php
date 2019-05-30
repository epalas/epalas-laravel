<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class  CreationTablePaim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paims', function (Blueprint $table){ //nom de la table
                $table->increments('id');


		$table->integer('idComde')->unsigned();
		$table->integer('idUtilComde')->unsigned();
                $table->foreign(['idUtilComde','idComde'])->references(['idUtil','id'])->on('comdes')->onDelete('cascade');
                $table->string('type');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paims');
    }
}
