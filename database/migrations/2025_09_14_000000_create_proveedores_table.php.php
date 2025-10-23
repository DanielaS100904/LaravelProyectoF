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
    Schema::create('proveedores', function (Blueprint $table) {
        $table->id(); // id AUTO_INCREMENT
        $table->string('nombre', 50);
        $table->string('apellido', 50)->nullable();
        $table->string('direccion', 50)->nullable();
        $table->string('telefono', 50)->nullable();
        $table->string('email', 50)->unique();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
