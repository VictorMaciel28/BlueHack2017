<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Responsaveis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsaveis', function (Blueprint $table) {
            $table->increments('idResponsavel');
            $table->timestamps();

            $table->string("nome");
            $table->string("email");
            $table->string("senha");
            $table->string("estado");
            $table->string("cidade");
            $table->char("sexo", 1);
            $table->string("bairro");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsaveis');
    }
}
