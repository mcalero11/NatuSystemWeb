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
        Schema::table('ajuste_inventarios',function (Blueprint $table){
            $table->foreign('inventario_id')
                ->references('id')
                ->on('inventarios')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

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

        Schema::table('usuarios_roles',function (Blueprint $table){
            $table->foreign('usuario_id')
                ->references('empleado_id')
                ->on('usuarios')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('rol_codigo')
                ->references('codigo')
                ->on('roles')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        //endregion

        //region FV01

        Schema::table('tirajes',function (Blueprint $table){
            $table->foreign('documento_codigo')
                ->references('codigo')
                ->on('documentos')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('local_id')
                ->references('id')
                ->on('locales')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        Schema::table('ventas',function (Blueprint $table){
            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('tiraje_id')
                ->references('id')
                ->on('tirajes')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        Schema::table('detalle_ventas',function (Blueprint $table){
            $table->foreign('venta_id')
                ->references('id')
                ->on('ventas')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('vendible_id')
                ->references('id')
                ->on('vendibles')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        Schema::table('cuentas_por_cobrar',function (Blueprint $table){
            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('venta_id')
                ->references('id')
                ->on('ventas')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        Schema::table('detalle_vendibles',function (Blueprint $table){
            $table->foreign('vendible_id')
                ->references('id')
                ->on('vendibles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('producto_id')
                ->references('id')
                ->on('productos')
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
        Schema::table('devoluciones',function (Blueprint $table){
            $table->foreign('local_id')
                ->references('id')
                ->on('locales')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        Schema::table('detalle_devoluciones',function (Blueprint $table){
            $table->foreign('devolucion_id')
                ->references('id')
                ->on('devoluciones')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('inventario_id')
                ->references('id')
                ->on('inventarios')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        //endregion

        //region IN01
        Schema::table('evento_participantes',function (Blueprint $table){
            $table->foreign('evento_id')
                ->references('id')
                ->on('eventos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('empleado_id')
                ->references('id')
                ->on('empleados')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        //endregion

        //region IP01
        Schema::table('productos',function (Blueprint $table){
            $table->foreign('presentacion_id')
                ->references('id')
                ->on('presentaciones')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('proveedor_id')
                ->references('id')
                ->on('proveedores')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });



        Schema::table('divisiones_productos',function (Blueprint $table){
            $table->foreign('producto_id')
                ->references('id')
                ->on('productos')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
        //endregion

        //region IR01
        Schema::table('requisiciones',function (Blueprint $table){
            $table->foreign('localA_id')
                ->references('id')
                ->on('locales')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('localB_id')
                ->references('id')
                ->on('locales')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        Schema::table('detalle_requisiciones',function (Blueprint $table){
            $table->foreign('requisicion_id')
                ->references('id')
                ->on('requisiciones')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('inventario_id')
                ->references('id')
                ->on('inventarios')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        //endregion

        //region IS01
        Schema::table('inventarios',function (Blueprint $table){
            $table->foreign('producto_id')
                ->references('id')
                ->on('productos')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('local_id')
                ->references('id')
                ->on('locales')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        Schema::table('compras',function (Blueprint $table){
            $table->foreign('proveedor_id')
                ->references('id')
                ->on('proveedores')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('local_id')
                ->references('id')
                ->on('locales')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        Schema::table('detalle_compras',function (Blueprint $table){
            $table->foreign('compra_id')
                ->references('id')
                ->on('compras')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('producto_id')
                ->references('id')
                ->on('productos')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
        //endregion

        //region PD01
        Schema::table('precios',function (Blueprint $table){
            $table->foreign('vendible_id')
                ->references('id')
                ->on('vendibles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('local_id')
                ->references('id')
                ->on('locales')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('tipoCliente_id')
                ->references('id')
                ->on('tipo_clientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('vendibles_descuentos',function (Blueprint $table){
            $table->foreign('descuento_id')
                ->references('id')
                ->on('descuentos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('vendible_id')
                ->references('id')
                ->on('vendibles')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        Schema::table('tipoclientes_descuentos',function (Blueprint $table){
            $table->foreign('descuento_id')
                ->references('id')
                ->on('descuentos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('tipoCliente_id')
                ->references('id')
                ->on('tipo_clientes')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });

        Schema::table('clientes_descuentos',function (Blueprint $table){
            $table->foreign('descuento_id')
                ->references('id')
                ->on('descuentos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
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
