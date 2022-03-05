<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Franquicitario
 *
 * @property $id
 * @property $idSucursal
 * @property $idFranquicia
 * @property $idUser
 * @property $Utilidad
 * @property $Created_by
 * @property $created_at
 * @property $updated_at
 *
 * @property Franquicia $franquicia
 * @property Sucursal $sucursal
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Franquicitario extends Model
{
    
    static $rules = [
		'idSucursal' => 'required',
		'idFranquicia' => 'required',
		'idUser' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idSucursal','idFranquicia','idUser','Utilidad','Created_by'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function franquicia()
    {
        return $this->hasOne('App\Models\Franquicia', 'id', 'idFranquicia');
    }
    
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
