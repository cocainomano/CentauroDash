<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sucursals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursals', function (Blueprint $table){
            $table->engine="InnoDB";
            $table->id();
            $table->string('Nombre');
            $table->string('Ubicacion');
            $table->string('NombreCve');
            $table->string('RFC',        15)   ->nullable();
            $table->string('RazonSocial',50)   ->nullable();
            $table->string('Calle',      50)   ->nullable();
            $table->string('Colonia',    50)   ->nullable();
            $table->string('Ciudad',     50)   ->nullable();
            $table->string('Municipio',  50)   ->nullable();
            $table->string('CP',         5)    ->nullable();
            $table->string('Email')            ->nullable();
            $table->string('Celular',    15)   ->nullable();
            $table->string('WhatsApp',   15)   ->nullable();
            $table->string('Banco',      50)   ->nullable();
            $table->string('NumTarjeta', 16)   ->nullable();
            $table->string('CLABE',      18)   ->nullable();
            $table->bigInteger('Created_by')   ->nullable();
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
        Schema::dropIfExists('sucursals');
    }
}
