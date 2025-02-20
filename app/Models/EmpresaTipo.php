<?php

namespace App\Models;
use App\Models\EmpresaTipo as empresa_tipo;

use Illuminate\Database\Eloquent\Model;

class EmpresaTipo extends Model
{
    protected $fillable = [
        "empresa_id",
        "tipo_materiales_id",
        ] ;

    public function tipo_materiales()
        {
            return $this->belongsTo(TipoMateriales::class);
        }
}
