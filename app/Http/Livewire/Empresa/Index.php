<?php

namespace App\Http\Livewire\Empresa;

use Livewire\WithPagination;

use Livewire\Component;
use App\Models\Empresa;
use App\Models\TipoMateriales;
use App\Models\EmpresaTipo;

class Index extends Component
{
    use WithPagination;
    public $modal, $materialesModal = false;
    public $nombre, $rif, $cedula, $nombres, $apellidos, $telefono, $direccion, $lat, $lon =null;
    public $tipos_materiales, $empresa_id, $nombreEmpresa, $tipoMaterialesId =null;
    public $search = null;
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $empresas = Empresa::where('nombre', 'like', "%$this->search%")->paginate(5);
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
    public function cerrarModal()
    {
        $this->materialesModal = false;
    }
    public function guardarMaterial()
    {
        EmpresaTipo::Create([
            'empresa_id' => $this->empresa_id,
            'tipo_materiales_id' => $this->tipoMaterialesId,
        ]);
        $this->materialesModal = false;
    }
}
