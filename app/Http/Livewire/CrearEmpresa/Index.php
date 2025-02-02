<?php

namespace App\Http\Livewire\CrearEmpresa;

use Livewire\Component;

class Index extends Component
{
    public $modal = false;
    public $nombre, $rif, $cedula, $nombres, $apellidos, $telefono, $direccion, $lat, $lon =null;
    public $tipo_materiales =null;
    public function render()
    {
        return view('livewire.empresa.crear');
    }
}
