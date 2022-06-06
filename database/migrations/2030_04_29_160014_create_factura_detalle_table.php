<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_detalle', function (Blueprint $table) {
            $table->id('fad_id');
<<<<<<< HEAD
            $table->foreignid('fac_id')->references('fac_id')->on('facturas');
=======
>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701
            $table->foreignid('prod_id')->references('prod_id')->on('productos');
            $table->integer('fad_cantidad');
            $table->float('fad_vu');
            $table->float('fad_vt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura_detalle');
    }
}
