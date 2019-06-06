<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class  CreationTableArt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arts', function (Blueprint $table){
                $table->increments('id');
                $table->integer('idPhoto')->unsigned();
                $table->foreign('idPhoto')->references('id')->on('photos')->onDelete('cascade');
                $table->integer('idComm')->unsigned();
                $table->foreign('idComm')->references('id')->on('comms')->onDelete('cascade');
                $table->string('titre');
		        $table->text('contenu');
                $table->timestamp('datePub')->nullable();
                $table->timestamp('dateRev')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arts');
    }
}
