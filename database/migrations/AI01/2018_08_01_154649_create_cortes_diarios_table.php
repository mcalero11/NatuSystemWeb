<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCortesDiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cortes_diarios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('local_id');
            $table->dateTime('fecha');
            $table->unsignedDecimal('efectivoSaliente',6,2);
            $table->unsignedTinyInteger('estadoEfectivoSaliente');
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
        Schema::dropIfExists('cortes_diarios');
    }
}
