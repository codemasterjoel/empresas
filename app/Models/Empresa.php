<?php

namespace App\Models;
use App\Models\Parroquia;
use App\Models\TipoMateriales;
use App\Models\Categoria;

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
        'sucursal',
        'categoria_id',
        'correo',
        'codigo',
        'user_id',
    ];

    public function parroquia()
    {
        return $this->belongsTo(Parroquia::class);
    }
    public function tipo_materiales()
    {
        return $this->belongsToMany(TipoMateriales::class, 'empresa_tipos');
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
