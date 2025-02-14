<?php

namespace App\Http\Livewire\CrearEmpresa;

use App\Models\EmpresaTipo;
use Livewire\Component;
use App\Models\Empresa;
use App\Models\TipoMateriales;
use App\Models\Parroquia;
use App\Models\Categoria;

class Index extends Component
{
    public $id = null;
    public $posee_runpa, $posee_conformidad, $posee_patente = null;
    public $fecha_runpa, $fecha_patente = null;
    public $input_patente = null;
    public $nombre, $rif, $cedula, $nombres, $apellidos, $telefono, $direccion, $lat, $lon, $sucursal, $correo = null;
    public $tipos_materiales, $materiales, $parroquias, $tipoMaterialesId, $parroquiaId, $categorias, $categoriaId =null;

    public function mount($id)
    {
        $this->id = $id;
    }    
    public function render()
    {
        if ($this->id) {
            $empresa = Empresa::findOrFail($this->id);
            $this->categorias = Categoria::all();
            $this->materiales = EmpresaTipo::where("empresa_id", $empresa->id)->count();
            
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
            $this->tipos_materiales = TipoMateriales::all();
            $this->correo = $empresa->correo;
            $this->categoriaId = $empresa->categoria_id;
            $this->categorias = Categoria::all();
            
            $this->posee_patente = $empresa->posee_patente;
            $this->posee_conformidad = $empresa->posee_conformidad;
            $this->posee_runpa = $empresa->posee_runpa;
            $this->fecha_runpa = $empresa->fecha_runpa;
            $this->fecha_patente = $empresa->fecha_patente;
    
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
        $existeEmpresa = Empresa::where('rif', $this->rif)->count();

        if($existeEmpresa > 0){
            $this->sucursal = 1;
        }

        if($existeEmpresa = 0){
            $this->sucursal = 0;
        }

        $this->validate([
            'nombre' => 'required',
            'rif' => 'required',
            'cedula' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'posee_runpa' => 'required',
            'posee_conformidad' => 'required',
            'posee_patente' => 'required',
            'lat' => 'required',
            'lon' => 'required',
            'parroquiaId' => 'required',
            'correo' => 'required|email:rfc',
            'categoriaId'=> 'required'
        ]);

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
            'parroquia_id' => $this->parroquiaId,
            'sucursal' => $this->sucursal,
            'categoria_id'=> $this->categoriaId,
            'correo' => $this->correo,
            'user_id'=> auth()->user()->id,
            'codigo' => 'EMP'.rand(1000, 9999)
        ]);

        return redirect('empresa');
    }
}
