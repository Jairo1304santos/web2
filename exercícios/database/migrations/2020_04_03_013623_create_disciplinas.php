<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinas extends Migration
{
    
    public function up()
    {
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('curso_id');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('disciplinas');
    }
}
