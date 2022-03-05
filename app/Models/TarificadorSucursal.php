<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TarificadorSucursal
 *
 * @property $id
 * @property $idPortafolio
 * @property $idSucursal
 * @property $CostoCentauro
 * @property $PrecioVentaFranquicia
 * @property $UtilidadSucursal
 * @property $Created_by
 * @property $created_at
 * @property $updated_at
 *
 * @property Portafolio $portafolio
 * @property Sucursal $sucursal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TarificadorSucursal extends Model
{
    protected $table = "TarificadorSucursals";
    static $rules = [
		'idPortafolio' => 'required',
		'idSucursal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idPortafolio','idSucursal','CostoCentauro','PrecioVentaFranquicia','UtilidadSucursal','Created_by'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function portafolio()
    {
        return $this->hasOne('App\Models\Portafolio', 'id', 'idPortafolio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursal()
    {
        return $this->hasOne('App\Models\Sucursal', 'id', 'idSucursal');
    }
    

}
