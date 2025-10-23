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
    Schema::create('productos', function (Blueprint $table) {
        $table->id(); // id AUTO_INCREMENT
        $table->string('nombre', 50);
        $table->string('descripcion', 50)->nullable();
        $table->float('precio')->unsigned();     

        // Relación con proveedor
        $table->unsignedBigInteger('proveedor_id');
        $table->foreign('proveedor_id')
              ->references('id')->on('proveedores')
              ->onUpdate('cascade')
              ->onDelete('cascade');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
