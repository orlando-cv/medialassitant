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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('sexo');
            $table->date('fecha');
            $table->string('escolaridad');
            $table->string('ocupacion')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('telefono')->nullable();
            $table->boolean('whatsapp');
            $table->string('calle', 30);
            $table->integer('num_ext');
            $table->integer('num_int')->nullable();
            $table->string('ciudad');
            $table->string('colonia');
            $table->string('cp');
            $table->string('estado');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
