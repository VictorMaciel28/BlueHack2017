<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produtos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('idProduto');
            $table->timestamps();

            $table->string("descricao");
            $table->string("imagem");
            $table->string("nome");
            $table->string("sexo_alvo");
            $table->integer("idResponsavel");
            $table->boolean("tipo");
            $table->integer("idadeMin")->nullable();
            $table->integer("idadeMax")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
