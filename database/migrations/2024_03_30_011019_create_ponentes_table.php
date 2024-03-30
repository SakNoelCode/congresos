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
        Schema::create('ponentes', function (Blueprint $table) {
            $table->id();
            $table->string('gerundio', 30);
            $table->string('nombres');
            $table->string('descripcion_breve');
            $table->string('descripcion_larga');
            $table->string('img_path', 2048);
            $table->string('centro_estudios');
            $table->foreignId('congreso_id')->constrained('congresos')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ponentes');
    }
};
