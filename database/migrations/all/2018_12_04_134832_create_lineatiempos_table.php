<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineatiemposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('lineatiempos', function (Blueprint $table) {
             $table->increments('id');
             $table->text('imagen')->nullable();
             $table->text('titulo_es')->nullable();
             $table->text('texto_es')->nullable();
             $table->text('titulo_en')->nullable();
             $table->text('texto_en')->nullable();
             $table->text('titulo_br')->nullable();
             $table->text('texto_br')->nullable();
             $table->text('ruta')->nullable();
             $table->text('orden')->nullable();
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
        Schema::dropIfExists('lineatiempos');
    }
}
