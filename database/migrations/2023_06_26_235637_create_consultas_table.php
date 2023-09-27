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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();

            $table->integer('sesion');
            $table->string('padecimiento')->nullable();
            $table->string('antecedentes')->nullable();
            $table->string('alergias');
            $table->string('peso');
            $table->string('estatura');
            $table->string('temperatura')->nullable();
            $table->string('presion')->nullable();
            $table->string('frecuencia_cardiaca')->nullable();
            $table->string('glucosa')->nullable();
            $table->unsignedBigInteger('paciente_id')->nullable();

            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('set null');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
