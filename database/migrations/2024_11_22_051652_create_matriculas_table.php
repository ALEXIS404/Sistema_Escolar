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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('estudiante_id')->constrained('estudiantes')->onDelete('cascade');
            $table->string('grado');
            $table->year('año_ingreso');
            $table->date('fecha_matricula');
            $table->enum('estado', ['activa', 'inactiva']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
