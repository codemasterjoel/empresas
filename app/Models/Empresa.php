<?php

namespace App\Models;
use App\Models\Parroquia;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public function parroquia()
    {
        return $this->belongsTo(Parroquia::class);
    }
}
