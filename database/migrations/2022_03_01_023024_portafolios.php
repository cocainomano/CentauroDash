<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Portafolios extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portafolios', function (Blueprint $table){
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('idProveedor')->unsigned();
            $table->string('NombreProducto');
            $table->string('NombreCve');
            $table->longText('Descripcion')     ->nullable();
            $table->longText('Condiciones')     ->nullable();
            $table->float('Costo_Proveedor')    ->nullable();
            $table->float('Venta_Centauro')     ->nullable();
            $table->string('Utilidad_Centauro') ->nullable();
            $table->timestamps();

            $table->foreign('idProveedor')->references('id')->on('proveedors')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portafolios');
    }
}
