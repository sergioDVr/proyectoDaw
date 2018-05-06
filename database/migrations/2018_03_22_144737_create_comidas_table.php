<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comidas', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('name');
            $table->integer("id_usuario");
            $table->integer("num_comensales");
            $table->integer("num_ocupados");
            $table->integer("pre_racion");
            $table->timestamp("fecha");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::drop('comidas');
    }
}
