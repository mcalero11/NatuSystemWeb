<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVendiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_vendibles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vendible_id');
            $table->unsignedInteger('producto_id');
            $table->unsignedDecimal('cantidad', Config::get('database.producto.cantidad.unidad'),Config::get('database.producto.cantidad.decimal'));
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
        Schema::dropIfExists('detalle_vendibles');
    }
}
