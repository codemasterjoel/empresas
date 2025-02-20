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

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $modal, $materialesModal, $baucheModal = false;
    public $nombre, $rif, $cedula, $nombres, $apellidos, $telefono, $direccion, $lat, $lon, $bauche, $telefono_pago, $fecha_pago, $referencia =null;
    public $tipos_materiales, $empresa_id, $nombreEmpresa, $tipoMaterialesId, $empresa =null;
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
        $this->empresa = Empresa::where('id', $id)->firstOrFail();

        if ($this->empresa->bauche) 
        {
            $this->bauche = $this->empresa->bauche;
            $this->telefono_pago = $this->empresa->telefono_pago;
            $this->fecha_pago = $this->empresa->fecha_pago;
            $this->referencia = $this->empresa->referencia;
        }
        
        $this->nombreEmpresa = $this->empresa->nombre;

        $this->baucheModal = true;
    }
    public function guardarBauche() 
    {
        $bauche = $this->bauche->store('bauche', 'public_path');
        $this->empresa = Empresa::updateOrCreate(['id' => $this->empresa_id],
        values: [
            'bauche' => $bauche,
            'telefono_pago' => $this->telefono_pago,
            'fecha_pago' => $this->fecha_pago,
            'referencia' => $this->referencia,
        ]);
        $this->baucheModal = false;
    }
    public function cerrarModal()
    {
        $this->materialesModal = false;
        $this->baucheModal = false;
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
}
