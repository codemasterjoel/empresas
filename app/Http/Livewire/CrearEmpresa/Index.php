<?php

namespace App\Http\Livewire\CrearEmpresa;

use App\Models\EmpresaTipo;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Empresa;
use App\Models\TipoMateriales;
use App\Models\Parroquia;
use App\Models\Categoria;
use App\Models\FilePatente;
use App\Models\Banco;

class Index extends Component
{
    use WithFileUploads;
    public $id, $empresa, $tipoRIF, $letra = null;
    public $patentePDF, $conformidadPDF, $runpaPDF, $rmercantilPDF,$rifPDF,$solvenciaPDF,$arrendamientoPDF,$catastralPDF,$croquisPDF,$planPDF,$origenPDF,$riesgoPDF = null;
    public $fecha_runpa, $fecha_patente, $ejes, $bancos = null;
    public $input_patente = null;
    public $nombre, $rif, $cedula, $nombres, $apellidos, $telefono, $direccion, $lat, $lon, $sucursal, $correo = null;
    public $tipos_materiales, $materiales, $parroquias, $tipoMaterialesId, $parroquiaId, $categorias, $categoriaId, $bancoId =null;

    public function mount($id)
    {
        $this->id = $id;
    }    
    public function render()
    {
        if ($this->id) {
            $empresa = Empresa::findOrFail($this->id);
            $this->categorias = Categoria::all();
            $this->bancos = Banco::all();
            $this->materiales = EmpresaTipo::where("empresa_id", $empresa->id)->count();
            
            $this->nombre = $empresa->nombre;
            $this->tipoRIF = $empresa->tipoRIF;
            $this->rif = $empresa->rif;
            $this->letra = $empresa->letra;
            $this->cedula = $empresa->cedula;
            $this->nombres = $empresa->nombres;
            $this->apellidos = $empresa->apellidos;
            $this->telefono = $empresa->telefono;
            $this->direccion = $empresa->direccion;
            $this->lat = $empresa->lat;
            $this->lon = $empresa->lon;
            $this->parroquiaId = $empresa->parroquia_id;
            $this->parroquias = Parroquia::all();
            $this->tipos_materiales = TipoMateriales::all();
            $this->correo = $empresa->correo;
            $this->categoriaId = $empresa->categoria_id;
            $this->categorias = Categoria::all();
            
            $this->fecha_runpa = $empresa->fecha_runpa;
            $this->fecha_patente = $empresa->fecha_patente;
            $this->patentePDF = $empresa->patentePDF;
            $this->runpaPDF = $empresa->runpaPDF;
            $this->rmercantilPDF = $empresa->rmercantilPDF;
            $this->rifPDF = $empresa->rifPDF;
            $this->solvenciaPDF = $empresa->solvenciaPDF;
            $this->arrendamientoPDF = $empresa->arrendamientoPDF;
            $this->catastralPDF = $empresa->catastralPDF;
            $this->croquisPDF = $empresa->croquisPDF;
            $this->planPDF = $empresa->planPDF;
            $this->origenPDF = $empresa->origenPDF;
            $this->riesgoPDF = $empresa->riesgoPDF;
            $this->conformidadPDF = $empresa->conformidadPDF;
    
            return view('livewire.empresa.crear', ['empresa'=> $empresa]);
    
            } else {
                $this->materiales = EmpresaTipo::where("empresa_id", $this->id)->count();
                $this->categorias = Categoria::all();
                $this->parroquias = Parroquia::all();
                $this->tipos_materiales = TipoMateriales::all();
                return view('livewire.empresa.crear');
            }
    }
    public function guardar(){

        $this->validate([
            'nombre' => 'required',
            'letra'=> 'required',
            'tipoRIF'=> 'required',
            'rif' => 'required',
            'cedula' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'lat' => 'required',
            'lon' => 'required',
            'parroquiaId' => 'required',
            'correo' => 'required|email:rfc',
            'categoriaId'=> 'required',
            'patentePDF'=> 'required',
            'runpaPDF' => 'required',
            'rmercantilPDF'=> 'required',
            'rifPDF'=> 'required',
            'solvenciaPDF'=> 'required',
            'arrendamientoPDF'=> 'required',
            'croquisPDF'=> 'required',
            'origenPDF'=> 'required',
        ]);

        $existeEmpresa = Empresa::where('rif', $this->rif)->count();

        if($existeEmpresa > 0){
            $this->sucursal = 1;
        }
        if($existeEmpresa = 0){
            $this->sucursal = 0;
        }
        if ($this->conformidadPDF) {
            $conformidad = $this->conformidadPDF->store('conformidad', 'public_path');
        }else{
            $conformidad = null;
        }
        if ($this->catastralPDF) {
            $catastral = $this->catastralPDF->store('catastral', 'public_path');
        }else{
            $catastral = null;
        }
        if ($this->planPDF) {
            $plan = $this->planPDF->store('plan', 'public_path');
        }else{
            $plan = null;
        }
        if ($this->riesgoPDF) {
            $riesgo = $this->riesgoPDF->store('riesgo', 'public_path');
        }else{
            $riesgo = null;
        }
       

        $patente = $this->patentePDF->store('patente', 'public_path');
        $runpa = $this->runpaPDF->store('runpa', 'public_path');
        $rmercantil = $this->rmercantilPDF->store('rmercantil', 'public_path');
        $rif = $this->rifPDF->store('rif', 'public_path');
        $solvencia = $this->solvenciaPDF->store('solvencia', 'public_path');
        $arrendamiento = $this->arrendamientoPDF->store('arrendamiento', 'public_path');
        $croquis = $this->croquisPDF->store('croquis', 'public_path');
        $origen = $this->origenPDF->store('origen', 'public_path');

        $this->empresa = Empresa::updateOrCreate(['id' => $this->id],
        values: [
            'nombre' => $this->nombre,
            'rif' => $this->rif,
            'letra'=> $this->letra,
            'tipoRIF'=> $this->tipoRIF,
            'cedula' => $this->cedula,
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'telefono' => $this->telefono,
            'direccion' => $this->direccion,
            'fecha_runpa' => $this->fecha_runpa,
            'fecha_patente' => $this->fecha_patente,
            'lat' => $this->lat,
            'lon' => $this->lon,
            'parroquia_id' => $this->parroquiaId,
            'sucursal' => $this->sucursal,
            'categoria_id'=> $this->categoriaId,
            'correo' => $this->correo,
            'user_id'=> auth()->user()->id,
            'patentePDF'=> $patente,
            'runpaPDF' => $runpa,
            'rmercantilPDF' => $rmercantil,
            'rifPDF' => $rif,
            'solvenciaPDF' => $solvencia,
            'arrendamientoPDF' => $arrendamiento,
            'catastralPDF' => $catastral,
            'croquisPDF' => $croquis,
            'planPDF' => $plan,
            'origenPDF' => $origen,
            'riesgoPDF' => $riesgo,
            'conformidadPDF' => $conformidad,
        ]);

        return redirect('empresa');
    }
}
