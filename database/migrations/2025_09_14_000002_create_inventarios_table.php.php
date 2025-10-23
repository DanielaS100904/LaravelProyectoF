<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id(); // id_inv → Laravel por convención usa solo id
            $table->unsignedBigInteger('producto_id');

            $table->integer('stock')->unsigned();
            $table->string('ubicacion', 100)->nullable();

            // Equivalente a TIMESTAMP con default y ON UPDATE
            $table->timestamp('fecha_actualizacion')
                ->useCurrent()
                ->useCurrentOnUpdate();

            // Relación con producto
            $table->foreign('producto_id')
                ->references('id')->on('productos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
