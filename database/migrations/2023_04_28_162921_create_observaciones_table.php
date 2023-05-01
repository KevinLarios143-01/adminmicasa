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
        Schema::create('observaciones', function (Blueprint $table) {
            $table->id('id');
            $table->string('texto');
            $table->datetime('fecha', $precision = 0);
            $table->integer('tipo');
            $table->integer('estado');
            $table->integer('familia');
            $table->timestamps();
            $table->foreign('tipo')->references('id')->on('tipos');
            $table->foreign('estado')->references('id')->on('estados');
            $table->foreign('familia')->references('id')->on('familias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observaciones');
    }
};
