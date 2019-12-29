<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagen')->nullable();
            $table->text('titulo_es')->nullable();
            $table->text('subtitulo_es')->nullable();
            $table->text('titulo_en')->nullable();
            $table->text('subtitulo_en')->nullable();
            $table->text('titulo_br')->nullable();
            $table->text('subtitulo_br')->nullable();
            $table->text('orden')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
