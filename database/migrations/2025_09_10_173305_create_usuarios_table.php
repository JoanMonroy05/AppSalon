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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id', 11);
            $table->string('nombre', 60);
            $table->string('apellido', 60);
            $table->string('email', 30)->unique();
            $table->string('password', 60);
            $table->string('telefono', 10)->nullable();
            $table->boolean('admin')->default(0);
            $table->boolean('confirmado')->default(0);
            $table->string('token', 15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
