<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fechaNacimiento');
            $table->boolean('genero');
            $table->string('dui', Config::get('database.persona.dui'));
            $table->string('nit', Config::get('database.persona.nit'))->nullable();
            $table->unsignedInteger('afp')->nullable();
            $table->unsignedInteger('isss')->nullable();
            $table->unsignedInteger('cuentaBancaria')->nullable();
            $table->date('fechaIngreso');
            $table->date('fechaEgreso')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono', Config::get('database.persona.telefono'))->nullable();
            $table->string('correo')->nullable();
            $table->unsignedDecimal('sueldoBase',Config::get('database.persona.sueldo.unidad'),Config::get('database.persona.sueldo.decimal'));
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
        Schema::dropIfExists('empleados');
    }
}
