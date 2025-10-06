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
        Schema::create('citas', function (Blueprint $table) {
            $table->id('id', 11);
            $table->date('fecha');
            $table->time('hora');

            // Relación con usuario (nullable para poder hacer SET NULL)
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')
                ->references('id')
                ->on('usuarios')
                ->nullOnDelete()
                ->nullOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
