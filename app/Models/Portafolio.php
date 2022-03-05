<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Portafolio
 *
 * @property $id
 * @property $idProveedor
 * @property $NombreProducto
 * @property $NombreCve
 * @property $Descripcion
 * @property $Condiciones
 * @property $Costo_Proveedor
 * @property $Venta_Centauro
 * @property $Utilidad_Centauro
 * @property $created_at
 * @property $updated_at
 *
 * @property Proveedor $proveedor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Portafolio extends Model
{
    
    static $rules = [
		'idProveedor' => 'required',
		'NombreProducto' => 'required',
		'NombreCve' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idProveedor','NombreProducto','NombreCve','Descripcion','Condiciones','Costo_Proveedor','Venta_Centauro','Utilidad_Centauro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedor()
    {
        return $this->hasOne('App\Models\Proveedor', 'id', 'idProveedor');
    }
    

}
