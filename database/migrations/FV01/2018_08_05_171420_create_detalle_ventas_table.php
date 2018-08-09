<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('venta_id');
            $table->unsignedInteger('vendible_id');
            $table->unsignedSmallInteger('cantidad');
            $table->unsignedDecimal('precio',Config::get('database.producto.dinero.unidad'),Config::get('database.producto.dinero.decimal'));
            $table->unsignedDecimal('descuento',Config::get('database.producto.descuento.unidad'),Config::get('database.producto.descuento.decimal'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_ventas');
    }
}
