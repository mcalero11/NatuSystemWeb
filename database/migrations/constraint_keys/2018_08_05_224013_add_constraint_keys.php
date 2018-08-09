<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraintKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //region AI01
        Schema::table('cajas',function (Blueprint $table){
            $table->foreign('local_id')
                ->references('id')
                ->on('locales')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        Schema::table('cortes_diarios',function (Blueprint $table){
            $table->foreign('local_id')
                ->references('local_id')
                ->on('cajas')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        Schema::table('gastos_ventas',function (Blueprint $table){
            $table->foreign('local_id')
                ->references('local_id')
                ->on('cajas')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('insumo_id')
                ->references('id')
                ->on('insumos')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        //endregion

        //region EU01
        Schema::table('usuarios',function (Blueprint $table){
            $table->foreign('empleado_id')
                ->references('id')
                ->on('empleados')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
        //endregion

        //region GC01
        Schema::table('clientes',function (Blueprint $table){
            $table->foreign('tipoCliente_id')
                ->references('id')
                ->on('tipo_clientes')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
        //endregion

        //region ID01
        //endregion

        //region IP01
        //endregion

        //region IR01
        //endregion

        //region IS01
        //endregion

        //region PD01
        //endregion
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
