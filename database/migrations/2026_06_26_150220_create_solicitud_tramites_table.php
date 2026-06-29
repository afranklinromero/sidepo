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
        Schema::create('solicitud_tramites', function (Blueprint $table) {
    $table->id();

    $table->foreignId('valorada_id')
        ->unique()
        ->constrained('valoradas');

    $table->foreignId('vehiculo_id')
    ->nullable()
    ->constrained()
    ->nullOnDelete();

    $table->string('nombre');
    $table->string('apellido_paterno');
    $table->string('apellido_materno')->nullable();

    $table->string('ci', 20);

    $table->string('telefono', 20);

    $table->timestamp('telefono_verificado_at')
        ->nullable();

    $table->enum('estado', [
        'registrada',
        'programada',
        'procesando',
        'finalizada',
        'cancelada'
    ])->default('registrada');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_tramites');
    }
};
