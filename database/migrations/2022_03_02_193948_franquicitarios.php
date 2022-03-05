<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Franquicitarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franquicitarios', function (Blueprint $table){
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger  ('idSucursal')->unsigned();
            $table->bigInteger  ('idFranquicia')->unsigned();
            $table->bigInteger  ('idUser')    ->unsigned();
            $table->float       ('Utilidad')  ->nullable();
            $table->bigInteger  ('Created_by')->nullable();
            $table->timestamps  ();

            $table->foreign('idSucursal')  ->references('id')->on('sucursals')   ->onDelete('cascade');
            $table->foreign('idFranquicia')->references('id')->on('franquicias') ->onDelete('cascade');
            $table->foreign('idUser')      ->references('id')->on('users')       ->onDelete('cascade');
        
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('franquicitarios');
    }
}
