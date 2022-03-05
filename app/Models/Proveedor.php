<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 *
 * @property $id
 * @property $Nombre
 * @property $NombreCve
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
 * @property Portafolio[] $portafolios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'NombreCve' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','NombreCve','Email','Celular','WhatsApp','Banco','NumTarjeta','CLABE','Created_by'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function portafolios()
    {
        return $this->hasMany('App\Models\Portafolio', 'idProveedor', 'id');
    }
    

}
