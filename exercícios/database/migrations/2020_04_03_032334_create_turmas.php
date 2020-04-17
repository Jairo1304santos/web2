<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmas extends Migration
{
    
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('disciplina_id');
            $table->string('tutor_id');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('turmas');
    }
}
