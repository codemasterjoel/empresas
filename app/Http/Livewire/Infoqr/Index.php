<?php

namespace App\Http\Livewire\Infoqr;
use App\Models\Infoqr;
use App\Models\Empresa;

use Livewire\Component;

class Index extends Component
{
    public $patente, $runpa, $rmercantil, $rif2, $solvencia, $arrendamiento, $catastral, $croquis, $plan, $origen, $riesgo, $conformidad, $aprobado = null;
    public $nombre, $codigo, $rif, $cedula, $nombres, $apellidos, $telefono, $direccion, $lat, $lon, $bauche, $bauchetemp, $fecha_pago, $referencia, $correo, $tipoRIF =null;
    public $empresa = null;

    public function mount($id) {
        $this->empresa = Empresa::findOrFail($id);

        $this->empresa = Empresa::find($id);

        $this->empresa_id = $id;
        $this->nombre = $this->empresa->nombre;
        $this->codigo = $this->empresa->parroquia->abreviatura."-".$this->empresa->codigo."-".$this->empresa->sucursal;
        $this->tipoRIF = $this->empresa->tipoRIF;
        $this->rif = $this->empresa->rif;
        $this->letra = $this->empresa->letra;
        $this->cedula = $this->empresa->cedula;
        $this->nombres = $this->empresa->nombres;
        $this->apellidos = $this->empresa->apellidos;
        $this->telefono = $this->empresa->telefono;
        $this->direccion = $this->empresa->direccion;
        $this->parroquiaId = $this->empresa->parroquia_id;
        $this->correo = $this->empresa->correo;
        $this->categoriaId = $this->empresa->categoria_id;

        $this->patente = $this->empresa->patente;
        $this->runpa = $this->empresa->runpa;
        $this->rmercantil = $this->empresa->rmercantil;
        $this->rif2 = $this->empresa->rif2;
        $this->solvencia = $this->empresa->solvencia;
        $this->arrendamiento = $this->empresa->arrendamiento;
        $this->catastral = $this->empresa->catastral;
        $this->croquis = $this->empresa->croquis;
        $this->plan = $this->empresa->plan;
        $this->origen = $this->empresa->origen;
        $this->riesgo = $this->empresa->riesgo;
        $this->conformidad = $this->empresa->conformidad;
    }

    public function render()
    {
        return view('livewire.reporte.info')->layout('layouts.single');
    }
}
