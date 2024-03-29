<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastosVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos_ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('local_id');
            $table->unsignedInteger('insumo_id');
            $table->unsignedSmallInteger('cantidad');
            $table->unsignedDecimal('precioTotal',Config::get('database.caja.dinero.unidad'),Config::get('database.caja.dinero.decimal'));
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
        Schema::dropIfExists('gastos_ventas');
    }
}
