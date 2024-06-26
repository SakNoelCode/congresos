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
        Schema::create('congresos', function (Blueprint $table) {
            $table->id();
            $table->string('numeracion');
            $table->string('nombre_1');
            $table->string('nombre_2');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('tag_fecha');
            $table->string('tag_lugar');
            $table->string('tag_horario');
            $table->string('tema');
            $table->string('descripcion');
            $table->boolean('es_seleccionado')->default(true);
            $table->boolean('abierto_inscripciones')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('congresos');
    }
};
