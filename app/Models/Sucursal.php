<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sucursal
 *
 * @property $id
 * @property $Nombre
 * @property $Ubicacion
 * @property $NombreCve
 * @property $RFC
 * @property $RazonSocial
 * @property $Calle
 * @property $Colonia
 * @property $Ciudad
 * @property $Municipio
 * @property $CP
 * @property $Email
 * @property $Celular
 * @property $WhatsApp
 * @property $Banco
 * @property $NumTarjeta
 * @property $CLABE
 * @property $Created_by
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sucursal extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Ubicacion' => 'required',
		'NombreCve' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Ubicacion','NombreCve','RFC','RazonSocial','Calle','Colonia','Ciudad','Municipio','Estado','CP','Email','Celular','WhatsApp','Banco','NumTarjeta','CLABE','Created_by'];



}
