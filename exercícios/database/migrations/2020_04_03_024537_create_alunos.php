<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 80);
            $table->string('telefone', 30);
            $table->string('email', 60);
            $table->string('cep', 20);
            $table->string('logradouro', 100);
            $table->string('complemento', 100);
            $table->string('bairro', 70);
            $table->string('uf', 20);
            $table->string('municipio', 50);
            $table->string('data_nascimento', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
