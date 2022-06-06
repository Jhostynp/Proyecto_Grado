<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('facturas', function (Blueprint $table) {
=======
        Schema::create('factura', function (Blueprint $table) {
>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701
            $table->id('fac_id');
            $table->foreignid('cli_id')->references('cli_id')->on('clientes');
            $table->string('fac_no');
            $table->date('fac_fecha');
            $table->float('fac_total');
            $table->float('fac_iva');
            $table->float('fac_descuento');///PORCENTAJE
<<<<<<< HEAD
            $table->string('fac_observaciones')->nullable();
=======
            $table->string('fac_observaciones');
>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701

            $table->integer('fac_estado')->default(1); //1_activo-0_anulado
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::dropIfExists('facturas');
=======
        Schema::dropIfExists('factura');
>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701
    }
}
