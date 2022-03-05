<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Franquicia
 *
 * @property $id
 * @property $idSucursal
 * @property $Nombre
 * @property $NombreCve
 * @property $RFC
 * @property $RazonSocial
 * @property $Calle
 * @property $Colonia
 * @property $Ciudad
 * @property $Municipio
 * @property $Estado
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
 * @property Sucursal $sucursal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Franquicia extends Model
{
    
    static $rules = [
		'idSucursal' => 'required',
		'Nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idSucursal','Nombre','NombreCve','RFC','RazonSocial','Calle','Colonia','Ciudad','Municipio','Estado','CP','Email','Celular','WhatsApp','Banco','NumTarjeta','CLABE','Created_by'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursal()
    {
        return $this->hasOne('App\Models\Sucursal', 'id', 'idSucursal');
    }
    

}
