<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleRequisicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_requisiciones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('requisicion_id');
            $table->unsignedInteger('inventario_id');
            $table->unsignedDecimal('cantidad',6,3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_requisiciones');
    }
}
