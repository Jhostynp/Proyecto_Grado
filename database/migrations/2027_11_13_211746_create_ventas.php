<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('ven_id');
            $table->foreignid('usu_id')->references('usu_id')->on('users');
            $table->foreignid('cli_id')->references('cli_id')->on('clientes');
            $table->foreignid('prod_id')->references('prod_id')->on('productos');
            $table->string('ven_fecha');
            $table->string('ven_cantidad');
            $table->integer('ven_iva');
            $table->string('ven_total');
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
        Schema::dropIfExists('ventas');
    }
}
