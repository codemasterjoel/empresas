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
        'tipoRIF',
        'rif',
        'letra',
        'cedula',
        'nombres',
        'apellidos',
        'telefono',
        'direccion',
        'fecha_runpa',
        'fecha_patente',
        'lat',
        'lon',
        'parroquia_id',
        'sucursal',
        'categoria_id',
        'correo',
        'codigo',
        'user_id',
        'patentePDF',
        'runpaPDF',
        'rmercantilPDF',
        'rifPDF',
        'solvenciaPDF',
        'arrendamientoPDF',
        'catastralPDF',
        'croquisPDF',
        'planPDF',
        'origenPDF',
        'riesgoPDF',
        'conformidadPDF',
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
