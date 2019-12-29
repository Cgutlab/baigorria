<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenidos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagen')->nullable();
            $table->text('titulo_es')->nullable();
            $table->text('titulo_en')->nullable();
            $table->text('titulo_br')->nullable();
            $table->text('subtitulo_es')->nullable();
            $table->text('subtitulo_en')->nullable();
            $table->text('subtitulo_br')->nullable();
            $table->text('texto_es')->nullable();
            $table->text('texto_en')->nullable();
            $table->text('texto_br')->nullable();
            $table->text('texto2_es')->nullable();
            $table->text('texto2_en')->nullable();
            $table->text('texto2_br')->nullable();            
            $table->text('ruta')->nullable();
            $table->text('seccion')->nullable();
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
        Schema::dropIfExists('contenidos');
    }
}
