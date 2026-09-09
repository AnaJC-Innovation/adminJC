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
        Schema::create('descripciones_checks', function (Blueprint $table) {
            $table->id();
            $table->text('descripcionelearning')->nullable();
            $table->text('checklistelearning')->nullable();
            $table->text('descripcionApp')->nullable();
            $table->text('checklistApp')->nullable();
            $table->text('descripcionWeb')->nullable();
            $table->text('checklistWeb')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descripciones_checks');
    }
};