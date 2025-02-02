<?php

namespace App\Http\Livewire\Empresa;

use Livewire\WithPagination;

use Livewire\Component;
use App\Models\Empresa;

class Index extends Component
{
    use WithPagination;
    public $modal = false;
    public $nombre, $rif, $cedula, $nombres, $apellidos, $telefono, $direccion, $lat, $lon =null;
    public $tipo_materiales =null;
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
    public function salir()
    {
        $this->modal = false;
    }
    
}
