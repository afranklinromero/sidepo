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
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->id();
            $table->string('estado');
            $table->string('usuario');
            $table->date('fecha');
            $table->string('observacion');
            $table->unsignedBigInteger('id_caso');
            $table->unsignedBigInteger('id_usuario');
            $table->timestamps();
          //  $table->string('id_archivo')->nullable();


          $table->foreign('id_caso')->references('id')->on('casos')->onDelete('cascade'); // Cascade onDelete
          $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade'); // Cascade onDelete

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguimientos');
    }
};
