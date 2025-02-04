<?php

namespace App\Models;
use App\Models\Parroquia;

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
        'tipo_materiales_id',
        'parroquia_id',
    ];

    public function parroquia()
    {
        return $this->belongsTo(Parroquia::class);
    }
}
