<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class  CreationTableReducomde extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reducomdes', function (Blueprint $table){ //nom de la table
                $table->integer('idRedu')->unsigned();
                $table->foreign('idRedu')->references('id')->on('redus')->onDelete('cascade');

                $table->integer('idComde')->unsigned();
                $table->integer('idUtilComde')->unsigned();
                $table->foreign(['idUtilComde','idComde'])->references(['idUtil','id'])->on('comdes')->onDelete('cascade');

                $table->primary(['idRedu','idComde','idUtilComde']);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reducomdes');
    }
}
