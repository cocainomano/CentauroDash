<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proveedors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table){
            $table->engine="InnoDB";
            $table->id();
            $table->string('Nombre');
            $table->string('NombreCve');
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
        Schema::dropIfExists('proveedors');
    }
}
