<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->text('codigo')->nullable();
            $table->text('titulo_es')->nullable();//descripcion
            $table->text('titulo_en')->nullable();
            $table->text('titulo_br')->nullable();
            $table->text('oem')->nullable();
            $table->text('tipo')->nullable();
            $table->text('medida_a')->nullable();
            $table->text('medida_b')->nullable();
            $table->text('medida_c')->nullable();
            $table->text('medida_d')->nullable();
            $table->text('medida_e')->nullable();
            $table->text('medida_f')->nullable();
            $table->text('medida_g')->nullable();
            $table->text('marca')->nullable();
            $table->text('modelo')->nullable();
            $table->text('dureza')->nullable();
            $table->text('terminacion')->nullable();
            $table->text('imagen1')->nullable();
            $table->text('imagen2')->nullable();
            $table->text('imagen3')->nullable();
            $table->text('imagen4')->nullable();
            $table->text('ficha')->nullable();
            $table->text('orden')->nullable();

            $table->integer('id_producto')->unsigned()->nullable();
            $table->foreign('id_producto')->references('id')->on('categorias')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('pedido_presentacion', function (Blueprint $table) {
            $table->increments('id');
            $table->text('cantidad')->nullable();
            $table->text('subtotal')->nullable();
            $table->text('iva')->nullable();
            $table->text('total')->nullable();
            $table->integer('id_pedido')->unsigned()->nullable();
            $table->foreign('id_pedido')->references('id')->on('pedidos')->onDelete('cascade');
            $table->integer('id_presentacion')->unsigned()->nullable();
            $table->foreign('id_presentacion')->references('id')->on('presentaciones')->onDelete('cascade');
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
        Schema::dropIfExists('presentaciones');
    }
}
