<?php

namespace App\Http\Livewire\CrearEmpresa;

use Livewire\Component;
use App\Models\Empresa;

class Index extends Component
{
    public $modal = false;
    public $nombre, $rif, $cedula, $nombres, $apellidos, $telefono, $direccion, $lat, $lon =null;
    public $tipo_materiales =null;
    public function render()
    {
        return view('livewire.empresa.crear');
    }
    public function guardar(){
        // Guardar en la base de datos
        $empresa = new Empresa();
        $empresa->nombre = $this->nombre;
        $empresa->rif = $this->rif;
        $empresa->cedula = $this->cedula;
        $empresa->nombres = $this->nombres;
        $empresa->apellidos = $this->apellidos;
        $empresa->telefono = $this->telefono;
        $empresa->direccion = $this->direccion;
        $empresa->lat = $this->lat;
        $empresa->lon = $this->lon;
        $empresa->tipo_materiales = $this->tipo_materiales;
        $empresa->save();
        $this->modal = false;
        $this->emit('empresaCreada');
    }
}
