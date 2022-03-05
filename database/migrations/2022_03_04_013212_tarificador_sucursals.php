<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TarificadorSucursals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TarificadorSucursals', function (Blueprint $table){
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger  ('idPortafolio')           ->unsigned();    // Se obtiene de Tabla Portafolios
            $table->bigInteger  ('idSucursal')             ->unsigned();
            $table->float       ('CostoCentauro')          ->nullable();    // Se obtiene de Portafolios
            $table->float       ('PrecioVentaFranquicia')  ->nullable();
            $table->float       ('UtilidadSucursal')       ->nullable();
            $table->bigInteger  ('Created_by')             ->nullable();
            $table->timestamps  ();

            $table->foreign('idPortafolio')->references('id')->on('portafolios') ->onDelete('cascade');
            $table->foreign('idSucursal')  ->references('id')->on('sucursals')   ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TarificadorSucursals');
    }
}
