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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('id_user')->unsigned();
            $table->timestamps();
            $table->string('tipo');
            $table->string('nombre');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->integer('ci');
            $table->string('placa');
            $table->string('chasis');
            $table->string('archivo');
            $table->string('alias')->nullable();
            

            $table->foreign('id_user')->references('id')->on('users')
            ;


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
