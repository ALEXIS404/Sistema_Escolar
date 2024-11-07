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
            $table->string('estudiante_id');
            $table->date('fecha_nacimieto');
            $table->enum('sexo', ['masculino', 'femenino']);
            $table->string('direccion');
            $table->foreignId('grado');
            $table->year('año_ingreso');
            $table->date('fecha_matricula');
            $table->enum('estado', ['activa', 'inactiva'])->default('activa');

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
