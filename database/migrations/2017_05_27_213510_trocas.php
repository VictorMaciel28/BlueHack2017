<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trocas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trocas', function (Blueprint $table) {
            $table->increments('idTroca');
            $table->timestamps();

            $table->date("data");
            $table->integer("idMae");
            $table->string("situacao");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trocas');
    }
}
