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
        Schema::create('familias_personas', function (Blueprint $table) {

            $table->integer('parentesco');
            $table->integer('bautizo');
            $table->integer('miembro');
            $table->integer('persona');
            $table->integer('familia');
            $table->foreign('persona')->references('id')->on('personas');
            $table->foreign('familia')->references('id')->on('familias');
            $table->primary(['persona', 'familia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('familias_personas');
    }
};
