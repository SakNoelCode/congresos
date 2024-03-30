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
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->string('encabezado');
            $table->string('descripcion');
            $table->string('img_bandera_path', 2048)->nullable();
            $table->boolean('es_ponencia');
            $table->foreignId('ponente_id')->nullable()->unique()->constrained('ponentes')->cascadeOnDelete();
            $table->foreignId('congreso_id')->constrained('congresos')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades');
    }
};
