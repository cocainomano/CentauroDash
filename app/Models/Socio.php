<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Socio
 *
 * @property $id
 * @property $idSucursal
 * @property $idUser
 * @property $Participacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Sucursal $sucursal
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Socio extends Model
{
    
    static $rules = [
		'idSucursal' => 'required',
		'idUser' => 'required',
    ];

    protected $perPage = 20;
 
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idSucursal','idUser','Participacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursal()
    {
        return $this->hasOne('App\Models\Sucursal', 'id', 'idSucursal');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'idUser');
    }
    

}
