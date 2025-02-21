<?php

namespace App\Http\Livewire\Empresa;

use Auth;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\Empresa;
use App\Models\TipoMateriales;
use Livewire\WithFileUploads;
use App\Models\EmpresaTipo;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Banco;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $modal, $materialesModal, $baucheModal, $documentosModal = false;
    public $nombre, $rif, $cedula, $nombres, $apellidos, $telefono, $direccion, $lat, $lon, $bauche, $bauchetemp, $fecha_pago, $referencia, $correo, $tipoRIF =null;
    public $tipos_materiales, $empresa_id, $nombreEmpresa, $tipoMaterialesId, $empresa, $bancos, $bancoId, $categoriaId =null;
    public $patentePDF, $runpaPDF, $rmercantilPDF, $rifPDF, $solvenciaPDF, $arrendamientoPDF, $catastralPDF, $croquisPDF, $planPDF, $origenPDF, $riesgoPDF, $conformidadPDF = null;
    public $search = null;
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        if (auth()->user()->rol_id == 1) 
        {
            $empresas = Empresa::where('nombre', 'like', "%$this->search%")->paginate(5);
        } else 
        {
            $empresas = Empresa::where('nombre', 'like', "%$this->search%")
                                 ->where('user_id', Auth()->user()->id)
                                 ->paginate(5);
        }
        return view('livewire.empresa.index', ['empresas' => $empresas]);
    }
    public function crear()
    {
        $this->modal = true;
    }
    public function materiales($id)
    {
        $this->empresa_id = $id;
        $this->tipos_materiales = TipoMateriales::all();
        $empresa = Empresa::where('id', $id)->firstOrFail();
        $this->nombreEmpresa = $empresa->nombre;

        $this->materialesModal = true;
    }
    public function bauches($id)
    {
        $this->empresa_id = $id;
        $this->tipos_materiales = TipoMateriales::all();
        $this->bancos = Banco::all();
        $this->empresa = Empresa::where('id', $id)->firstOrFail();

        if ($this->empresa->bauche) 
        {
            $this->bauche = $this->empresa->bauche;
            $this->bancoId = $this->empresa->banco_id;
            $this->fecha_pago = $this->empresa->fecha_pago;
            $this->referencia = $this->empresa->referencia;
        }
        
        $this->nombreEmpresa = $this->empresa->nombre;

        $this->baucheModal = true;
    }
    public function guardarBauche() 
    {
        $this->validate([
            'bauche' => 'required|mimes:jpg,jpeg,png',
            'bancoId'=> 'required',
            'fecha_pago'=> 'required',
            'referencia' => 'required',
        ]);

        $bauche = $this->bauche->store('bauche', 'public_path');
        $this->empresa = Empresa::updateOrCreate(['id' => $this->empresa_id],
        values: [
            'bauche' => $bauche,
            'banco_id' => $this->bancoId,
            'fecha_pago' => $this->fecha_pago,
            'referencia' => $this->referencia,
        ]);
        $this->limpiarModalBauche();
        $this->baucheModal = false;
    }
    public function cerrarModal()
    {
        $this->materialesModal = false;
        $this->baucheModal = false;
        $this->documentosModal = false;
    }
    public function guardarMaterial()
    {
        EmpresaTipo::Create([
            'empresa_id' => $this->empresa_id,
            'tipo_materiales_id' => $this->tipoMaterialesId,
        ]); 
    }
    public function ficha($id)
    {
        $empresa = Empresa::find($id);

        //return view('livewire.reportes.ficha');
        $pdf = Pdf::loadView('livewire.reportes.ficha', ['empresa'=>$empresa]);
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time', 0);
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, 'ficha.pdf');
    }
    public function limpiarModalBauche()
    {
        $this->bauche = null;
        $this->bancoId = null;
        $this->fecha_pago = null;
        $this->referencia = null;
    }
    public function documentos($id)
    {
        $this->empresa = Empresa::find($id);

        $this->nombre = $this->empresa->nombre;
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

        $this->patentePDF = $this->empresa->patentePDF;
        $this->runpaPDF = $this->empresa->runpaPDF;
        $this->rmercantilPDF = $this->empresa->rmercantilPDF;
        $this->rifPDF = $this->empresa->rifPDF;
        $this->solvenciaPDF = $this->empresa->solvenciaPDF;
        $this->arrendamientoPDF = $this->empresa->arrendamientoPDF;
        $this->catastralPDF = $this->empresa->catastralPDF;
        $this->croquisPDF = $this->empresa->croquisPDF;
        $this->planPDF = $this->empresa->planPDF;
        $this->origenPDF = $this->empresa->origenPDF;
        $this->riesgoPDF = $this->empresa->riesgoPDF;
        $this->conformidadPDF = $this->empresa->conformidadPDF;

        $this->documentosModal = true;
    }
}
