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
        Schema::create('documento_generados', function (Blueprint $table) {
    $table->id();

    $table->foreignId('solicitud_tramite_id')
        ->unique()
        ->constrained('solicitud_tramites')
        ->cascadeOnDelete();

    $table->string('codigo_consulta', 100)
        ->unique();

    $table->string('archivo_pdf');

    $table->timestamp('fecha_expiracion');

    $table->foreignId('user_id')
        ->constrained('users');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documento_generados');
    }
};
