<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleDevolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_devoluciones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('devolucion_id');
            $table->unsignedInteger('inventario_id');
            $table->unsignedDecimal('cantidad',6,3);
            $table->string('comentario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_devoluciones');
    }
}
