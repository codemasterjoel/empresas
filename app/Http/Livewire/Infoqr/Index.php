<?php

namespace App\Http\Livewire\Infoqr;
use App\Models\Infoqr;
use App\Models\Empresa;

use Livewire\Component;

class Index extends Component
{
    public $empresa = null;

    public function mount($id) {
        $this->empresa = Empresa::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.reporte.info')->layout('layouts.single');
    }
}
