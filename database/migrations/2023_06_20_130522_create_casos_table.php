<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('casos', function (Blueprint $table) {
            $table->id();
            $table->string('caso');
            $table->date('fecha');
            $table->string('placa');
            $table->string('vehiculo');
            $table->string('marca');
            $table->string('clase');
            $table->string('color');
            $table->integer('modelo');
            $table->string('chasis');
            $table->string('hecho');
            $table->string('nombre');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->string('estado');
            $table->string('grupo_designado');
            $table->string('designado');
            $table->string('regional');
            $table->string('lugar');
            $table->string('mes');
            $table->string('ano');
            $table->string('ci');
            $table->BigInteger('id_user')->unsigned();
            $table->timestamps();
            $table->string('archivo');

            $table->foreign('id_user')->references('id')->on('users')
            ;


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casos');
    }
};
