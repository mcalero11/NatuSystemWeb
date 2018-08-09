<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTirajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tirajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('documento_codigo');
            $table->unsignedInteger('local_id');
            $table->unsignedInteger('rangoMenor');
            $table->unsignedInteger('rangoMayor');
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
        Schema::dropIfExists('tirajes');
    }
}
