<?php

namespace App\Models;
use App\Models\Parroquia;
use App\Models\TipoMateriales;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'nombre',
        'rif',
        'cedula',
        'nombres',
        'apellidos',
        'telefono',
        'direccion',
        'posee_runpa',
        'fecha_runpa',
        'posee_patente',
        'fecha_patente',
        'posee_conformidad',
        'lat',
        'lon',
        'parroquia_id',
    ];

    public function parroquia()
    {
        return $this->belongsTo(Parroquia::class);
    }
    public function tipos()
    {
        return $this->belongsToMany(TipoMateriales::class, 'empresa_tipos');
    }
}
