<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tarifranquicia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tarifranquicias', function (Blueprint $table){
            $table->engine="InnoDB";
            // CAMPOS RELACIONADOS
            $table->id();
            $table->bigInteger  ('id_tarificador')         ->unsigned();    // 01
            $table->bigInteger  ('idPortafolio')           ->unsigned();    // 2
            $table->bigInteger  ('idSucursal')             ->unsigned();    // 02
            $table->bigInteger  ('idFranquicia')           ->unsigned();    // 11     
            // CAMPOS DETALLE
            $table->float       ('CostoSucursal')          ->nullable();    // Se obtiene de Tarificador Sucursal
            $table->float       ('UtilidadFranquicia')     ->nullable();
            $table->float       ('TarifaPremier')          ->nullable();
            $table->float       ('TarifaComercial')        ->nullable();
            $table->bigInteger  ('Created_by')             ->nullable();
            $table->timestamps  ();
            //Forañias
            
            $table->foreign('id_tarificador')->references('id')->on('TarificadorSucursals') ->onDelete('cascade');
            $table->foreign('idPortafolio')->references('id')->on('portafolios') ->onDelete('cascade');
        
            $table->foreign('idSucursal')  ->references('id')->on('sucursals')   ->onDelete('cascade');
            $table->foreign('idFranquicia')->references('id')->on('franquicias') ->onDelete('cascade');
            
            //Unicas
            $table->unique(['id_tarificador', 'idPortafolio','idSucursal', 'idFranquicia'], 'tarifaunicafranquicia');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tarifranquicias');
    }
}
