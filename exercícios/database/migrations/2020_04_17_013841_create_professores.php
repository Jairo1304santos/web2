<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessores extends Migration
{
   
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('matricula');
            $table->string('cpf');
            $table->integer('telefone');
            $table->string('email');
            $table->string('cep');
            $table->string('logradouro');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('uf');
            $table->string('municipio');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('professores');
    }
}
