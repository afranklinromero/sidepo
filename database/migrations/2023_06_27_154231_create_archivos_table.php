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
        Schema::create('archivos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('caso_id')->unsigned();
            $table->string('format')->nullable();
            $table->string('file')->nullable();


            $table->foreign('caso_id')->references('id')->on('casos')
           ->onUpdate('cascade');
            ;
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivos');
    }
};
