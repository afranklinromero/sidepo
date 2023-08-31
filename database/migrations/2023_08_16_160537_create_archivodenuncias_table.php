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
        Schema::create('archivodenuncias', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo');
            $table->string('pdf');
            $table->timestamps();
            $table->unsignedBigInteger('id_caso')->unsigned();

            $table->foreign('id_caso')->references('id')->on('casos')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivodenuncias');
    }
};
