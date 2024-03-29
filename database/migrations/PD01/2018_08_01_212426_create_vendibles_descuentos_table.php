<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendiblesDescuentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendibles_descuentos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('descuento_id');
            $table->unsignedInteger('vendible_id');
            $table->unsignedDecimal('cantidadMinima',Config::get('database.producto.cantidad.unidad'),Config::get('database.producto.cantidad.decimal'));
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
        Schema::dropIfExists('vendibles_descuentos');
    }
}
