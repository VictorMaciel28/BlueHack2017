<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Filhos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filhos', function (Blueprint $table) {
            $table->increments('idFilho');
            $table->timestamps();

            $table->string("nome")->nullable();
            $table->date("data_nascimento")->nullable();
            $table->string("idResponsavel")->nullable();
            $table->integer("tamanho_pe");
            $table->decimal("altura");
            $table->integer("peso");
            $table->string("tamanho_fralda", 10);
            $table->string("tamanho_roupa", 10);
            $table->char("sexo", 1)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filhos');
    }
}
