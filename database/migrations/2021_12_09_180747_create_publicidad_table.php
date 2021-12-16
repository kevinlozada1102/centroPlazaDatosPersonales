<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicidad', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->date('fechainicio');
            $table->date('fechafinal');
            $table->string('asunto');
            $table->text('contenido');
            $table->string('imagen');
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
        Schema::dropIfExists('publicidad');
    }
}
