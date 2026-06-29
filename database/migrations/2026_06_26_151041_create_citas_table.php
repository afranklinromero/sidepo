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
       Schema::create('citas', function (Blueprint $table) {
    $table->id();

    $table->foreignId('solicitud_tramite_id')
        ->constrained('solicitud_tramites')
        ->cascadeOnDelete();

    $table->date('fecha');

    $table->enum('turno', [
        'manana',
        'tarde'
    ]);

    $table->integer('numero_ficha');

    $table->enum('estado', [
        'programada',
        'atendida',
        'ausente',
        'cancelada'
    ])->default('programada');

    $table->unique([
        'fecha',
        'turno',
        'numero_ficha'
    ]);

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
