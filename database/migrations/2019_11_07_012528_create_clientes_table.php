<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('centro_universitario_id');
            $table->string('nombre');
            $table->unsignedInteger('codigo')->unique();
            $table->string('correo')->unique();
            $table->date('fecha_nacimiento');
            $table->timestamps();
            $table->foreign('centro_universitario_id')
                ->references('id')
                ->on('centros_universitarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
