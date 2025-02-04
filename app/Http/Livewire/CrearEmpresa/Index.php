<?php

namespace App\Http\Livewire\CrearEmpresa;

use Livewire\Component;
use App\Models\Empresa;
use App\Models\TipoMateriales;
use App\Models\Parroquia;

class Index extends Component
{
    public $id = null;
    public $posee_runpa, $posee_conformidad, $posee_patente = null;
    public $fecha_runpa, $fecha_patente = null;
    public $nombre, $rif, $cedula, $nombres, $apellidos, $telefono, $direccion, $lat, $lon =null;
    public $tipos_materiales, $parroquias, $tipoMaterialesId, $parroquiaId =null;

    public function mount($id)
    {
        $this->id = $id;
    }    public function render()
    {
        if ($this->id) {
            $empresa = Empresa::findOrFail($this->id);
    
            $this->nombre = $empresa->nombre;
            $this->rif = $empresa->rif;
            $this->cedula = $empresa->cedula;
            $this->nombres = $empresa->nombres;
            $this->apellidos = $empresa->apellidos;
            $this->telefono = $empresa->telefono;
            $this->direccion = $empresa->direccion;
            $this->lat = $empresa->lat;
            $this->lon = $empresa->lon;
            $this->parroquiaId = $empresa->parroquia_id;
            $this->parroquias = Parroquia::all();
            $this->tipoMaterialesId = $empresa->tipo_materiales_id;
            $this->tipos_materiales = TipoMateriales::all();
            
            $this->posee_patente = $empresa->posee_patente;
            $this->posee_conformidad = $empresa->posee_conformidad;
            $this->posee_runpa = $empresa->posee_runpa;
            $this->fecha_runpa = $empresa->fecha_runpa;
            $this->fecha_patente = $empresa->fecha_patente;
    
            return view('livewire.empresa.crear');
    
            } else {
                $this->parroquias = Parroquia::all();
                $this->tipos_materiales = TipoMateriales::all();
                return view('livewire.empresa.crear');
            }
    }
    public function guardar(){
        $existeEmpresa = Empresa::where('rif', $this->rif)->get();

        if(count($existeEmpresa) > 0){
            $this->sucursal = true;
        }else {
            $this->sucursal = false;
        }

        Empresa::updateOrCreate(['id' => $this->id],
        values: [
            'nombre' => $this->nombre,
            'rif' => $this->rif,
            'cedula' => $this->cedula,
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'telefono' => $this->telefono,
            'direccion' => $this->direccion,
            'posee_runpa' => $this->posee_runpa,
            'fecha_runpa' => $this->fecha_runpa,
            'posee_conformidad' => $this->posee_conformidad,
            'posee_patente' => $this->posee_patente,
            'fecha_patente' => $this->fecha_patente,
            'lat' => $this->lat,
            'lon' => $this->lon,
            'tipo_materiales_id' => $this->tipoMaterialesId,
            'parroquia_id' => $this->parroquiaId,
            'sucursal' => $this->sucursal,
        ]);

        return redirect('empresa');
    }
}
