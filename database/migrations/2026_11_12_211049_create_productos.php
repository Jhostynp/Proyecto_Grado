<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('prod_id');
            $table->foreignid('cat_id')->references('cat_id')->on('categorias');
            $table->foreignid('prov_id')->references('prov_id')->on('provedor');
            $table->string('pro_nombre');
            $table->string('pro_descripcion');
            $table->string('prod_stock');
            $table->string('prod_precio');
            $table->date('prod_fecha');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
