<?php

namespace App\Models;
use App\Models\Empresa;

use Illuminate\Database\Eloquent\Model;

class TipoMateriales extends Model
{
    public function empresas()
    {
        return $this->belongsToMany(Empresa::class, 'empresa_tipos');
    }
}
