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
use Psy\Readline\Hoa\Console;

class Index extends Component
{
    use WithFileUploads;
    public $id, $empresa, $tipoRIF, $letra, $listaMateriales = null;
    public $patente, $runpa, $rmercantil, $rif2, $solvencia, $arrendamiento, $catastral, $croquis, $plan, $origen, $riesgo, $conformidad, $aprobado = null;
    public $patentePDF, $conformidadPDF, $runpaPDF, $rmercantilPDF,$rifPDF,$solvenciaPDF,$arrendamientoPDF,$catastralPDF,$croquisPDF,$planPDF,$origenPDF,$riesgoPDF = null;
    public $fecha_runpa, $fecha_patente, $ejes, $bancos, $bauche = null;
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
            $this->listaMateriales = EmpresaTipo::where("empresa_id", $empresa->id)->get();
            $this->parroquias = Parroquia::all();
            $this->tipos_materiales = TipoMateriales::all();
            $this->categorias = Categoria::all();
            
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
            $this->correo = $empresa->correo;
            $this->categoriaId = $empresa->categoria_id;
            
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
            $this->bauche = $empresa->bauche;

            $this->patente = $empresa->patente;
    
            return view('livewire.empresa.crear', ['empresa'=> $empresa]);
    
            } else {

                $this->materiales = EmpresaTipo::where("empresa_id", $this->id)->count();
                $this->categorias = Categoria::all();
                $this->parroquias = Parroquia::all();
                $this->tipos_materiales = TipoMateriales::all();

                return view('livewire.empresa.crear')->with('success', 'success');
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
                'croquisPDF'=> 'required',
                'rifPDF'=> 'required',
                'rmercantilPDF'=> 'required',
            ]);

            $existeEmpresa = Empresa::where('rif', $this->rif)->count();

            if ($existeEmpresa > 0){
                $this->sucursal = $existeEmpresa+1;
            }elseif($existeEmpresa == 0){
                $this->sucursal = 1;
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
            if ($this->patentePDF) {
                $patente = $this->patentePDF->store('patente', 'public_path');
            } else {
                $patente = null;
            }
            if ($this->runpaPDF) {
                $runpa = $this->runpaPDF->store('runpa', 'public_path');
            } else {
                $runpa = null;
            }
            if ($this->solvenciaPDF) {
                $solvencia = $this->solvenciaPDF->store('solvencia', 'public_path');
            } else {
                $solvencia = null;
            }
            if ($this->arrendamientoPDF) {
                $arrendamiento = $this->arrendamientoPDF->store('arrendamiento', 'public_path');
            } else {
                $arrendamiento = null;
            }
            if ($this->origenPDF) {
                $origen = $this->origenPDF->store('origen', 'public_path');
            } else {
                $origen = null;
            }
            
            $valor_formateado = substr($this->rif, 0, -1) . "-" . substr($this->rif, -1);

            $croquis = $this->croquisPDF->store('croquis', 'public_path');
            $rif = $this->rifPDF->store('rif', 'public_path');
            $rmercantil = $this->rmercantilPDF->store('rmercantil', 'public_path');

            $this->empresa = Empresa::updateOrCreate(['id' => $this->id],
            values: [
                'nombre' => $this->nombre,
                'rif' => $valor_formateado,
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
