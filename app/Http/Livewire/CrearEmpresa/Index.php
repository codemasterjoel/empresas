<?php

namespace App\Http\Livewire\CrearEmpresa;

use Livewire\Component;
use App\Models\Empresa;
use App\Models\TipoMateriales;
use App\Models\Parroquia;

class Index extends Component
{
    public $modal = null;
    public $posee_runpa, $posee_conformidad, $posee_patente = null;
    public $fecha_runpa, $fecha_patente = null;
    public $nombre, $rif, $cedula, $nombres, $apellidos, $telefono, $direccion, $lat, $lon =null;
    public $tipos_materiales, $parroquias, $tipoMaterialesId, $parroquiaId =null;
    public function render()
    {
        $this->parroquias = Parroquia::all();
        $this->tipos_materiales = TipoMateriales::all();
        return view('livewire.empresa.crear');
    }
    public function guardar(){

        $existeEmpresa = Empresa::where('rif', $this->rif)->get();

        //dd(count($existeEmpresa));

        $empresa = new Empresa();
        $empresa->nombre = $this->nombre;
        $empresa->rif = $this->rif;
        $empresa->cedula = $this->cedula;
        $empresa->nombres = $this->nombres;
        $empresa->apellidos = $this->apellidos;
        $empresa->telefono = $this->telefono;
        $empresa->direccion = $this->direccion;
        $empresa->posee_runpa = $this->posee_runpa;
        $empresa->fecha_runpa = $this->fecha_runpa;
        $empresa->posee_conformidad = $this->posee_conformidad;
        $empresa->posee_patente = $this->posee_patente;
        $empresa->fecha_patente = $this->fecha_patente;
        $empresa->lat = $this->lat;
        $empresa->lon = $this->lon;
        $empresa->tipo_materiales_id = $this->tipoMaterialesId;
        $empresa->parroquia_id = $this->parroquiaId;
        if(count($existeEmpresa) > 0){
            $empresa->sucursal = true;
        }else {
            $empresa->sucursal = false;
        }
        $empresa->save();
        return redirect('empresa');
    }
}
