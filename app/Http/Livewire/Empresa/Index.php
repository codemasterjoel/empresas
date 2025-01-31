<?php

namespace App\Http\Livewire\Empresa;

use Livewire\Component;
use App\Models\Empresa;

class Index extends Component
{
    public $modal = false;
    
    public function render()
    {
        $empresas = Empresa::all();
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
