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
        Schema::create('cliente_sesion', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cliente_id')
                ->constrained('administradors')
                ->onDelete('cascade');

            $table->foreignId('descripcion_id')
                ->constrained('descripciones_checks')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_sesion');
    }
};