<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->length(100);
            $table->string('apellido')->length(100);
            $table->string('nombrecompleto')->length(200);
            $table->string('email')->unique();
            $table->string('sexo');
            $table->date('fechanac' );
            $table->integer('dni')->length(11)->unique();
            $table->integer('telefono')->length(9)->unique();
            $table->string('direccion')->length(100);
            $table->boolean('enviarcorreo')->default(true);
            $table->boolean('estado')->default(true);
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
        Schema::dropIfExists('personas');
    }
}
