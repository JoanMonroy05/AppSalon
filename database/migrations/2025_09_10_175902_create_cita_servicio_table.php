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
        Schema::create('cita_servicio', function (Blueprint $table) {
            $table->id();

            // Relación con cita (nullable para poder usar SET NULL)
            $table->unsignedBigInteger('cita_id')->nullable();
            $table->foreign('cita_id')
                ->references('id')
                ->on('citas')
                ->nullOnDelete()
                ->nullOnUpdate();

            // Relación con servicio (nullable para poder usar SET NULL)
            $table->unsignedBigInteger('servicio_id')->nullable();
            $table->foreign('servicio_id')
                ->references('id')
                ->on('servicios')
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
        Schema::dropIfExists('cita_servicio');
    }
};
