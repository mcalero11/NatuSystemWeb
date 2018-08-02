<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAjusteInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajuste_inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('inventario_id');
            $table->unsignedDecimal('cantidad',6,3);
            $table->unsignedTinyInteger('accion');
            $table->text('motivo');
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
        Schema::dropIfExists('ajuste_inventarios');
    }
}
