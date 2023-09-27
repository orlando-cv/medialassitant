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
        Schema::create('relacioncms', function (Blueprint $table) {
            $table->id();
            $table->string('medicamento');
            $table->string('dosis');
            $table->string('frecuencia');
            $table->string('indicaciones');
            $table->integer('paciente_id');
            $table->unsignedBigInteger('consulta_id')->nullable();
            $table->unsignedBigInteger('medicamento_id')->nullable();

            $table->foreign('consulta_id')->references('id')->on('consultas')->onDelete('set null');
            $table->foreign('medicamento_id')->references('id')->on('medicamentos')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relacioncms');
    }
};
