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
            $table->unsignedDecimal('cantidad',6,2);
            $table->unsignedDecimal('precioTotal',6,2);
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
