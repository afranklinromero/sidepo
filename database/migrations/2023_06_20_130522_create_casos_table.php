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
            $table->string('grupo_designado')->nullable();;
            $table->string('lugar')->nullable();;
            $table->string('ano')->nullable();;
            $table->string('ci')->nullable();;
            $table->string('caso')->nullable();;
            $table->date('fecha_denuncia')->nullable();;
            $table->string('placa')->nullable();;
            $table->string('vehiculo')->nullable();;
            $table->string('marca')->nullable();;
            $table->string('tipo')->nullable();;
            $table->string('color')->nullable();;
          
            $table->integer('modelo')->nullable();;
            $table->string('chasis')->nullable();;
            $table->string('hecho')->nullable();;
           $table->string('nombre')->nullable();;
            $table->string('apaterno')->nullable();;
            $table->string('amaterno')->nullable();;
            $table->string('estado')->nullable();;
           $table->string('asignado')->nullable();;
          $table->string('regional')->nullable();;

            $table->BigInteger('id_user')->unsigned();
            $table->timestamps();
           // $table->string('id_archivo')->nullable();


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
