<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_grupo');
            $table->timestamps();
        });

        Schema::create('cliente_grupo', function (Blueprint $table) {
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('grupo_id');

            $table->foreign('cliente_id')
              ->references('id')
              ->on('clientes')
              ->onDelete('cascade');
              
            $table->foreign('grupo_id')
              ->references('id')
              ->on('grupos')
              ->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('cliente_grupo');
        Schema::dropIfExists('grupos');
        
    }
}