<div class="main-content mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div>
                        <h5 class="mb-2 font-bold">REGISTRO DE EMPRESAS RECICLADORAS</h5>
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <input wire:model.live="search" type="text" placeholder="Filtrar por Nombre" class="w-30 px-4 py-2 border border-solid rounded-lg outline-2 font-bold">
                        {{-- <button wire:click="crear()" class="btn bg-gradient-primary btn-sm mb-0 font-weight-bolder" type="button">+&nbsp; NUEVA EMPRESA</button> --}}
                        <button type="button" class="btn bg-gradient-primary btn-sm mb-0 font-weight-bolder" data-bs-toggle="modal" data-bs-target="#exampleModal">+&nbsp; NUEVA EMPRESA</button>
                    </div>
                </div>
                @if($modal)
                    @include('livewire.empresa.crear')   
                @endif
                
                @if ($empresas->count())
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-dark font-weight-bolder">#</th>
                                        <th class="text-center text-uppercase text-dark font-weight-bolder">cedula</th>
                                        <th class="text-center text-uppercase text-dark font-weight-bolder">nombre</th>
                                        <th class="text-center text-uppercase text-dark font-weight-bolder">estado</th>
                                        <th class="text-center text-uppercase text-dark font-weight-bolder">municipio</th>
                                        <th class="text-center text-uppercase text-dark font-weight-bolder">estatus</th>
                                        <th class="text-center text-uppercase text-dark font-weight-bolder">acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $indice =0; ?>
                                    @foreach ($empresas as $empresa)
                                    <?php $indice += 1; ?>
                                    <tr class="w-[800]">
                                        <td class="ps-4"><p class="font-weight-bold text-dark mb-0"><?php echo $indice; ?></p></td>
                                        <td class="text-center text-uppercase"><p class="text-dark font-weight-bold mb-0">{{$empresa->letra}}{{$empresa->cedula}}</p></td>
                                        <td class="text-center text-uppercase"><p class="text-dark font-weight-bold mb-0">{{isset($empresa->nombre) ? $empresa->nombre : ''}} {{$empresa->apellido}}</p></td>
                                        <td class="text-center text-uppercase"><p class="text-dark font-weight-bold mb-0">{{$empresa->estado->nombre}}</p></td>
                                        <td class="text-center text-uppercase"><p class="text-dark font-weight-bold mb-0">{{isset($empresa->municipio->nombre) ? $empresa->municipio->nombre : ''}}</p></td>
                                        <td class="text-center text-uppercase"><p class=" font-weight-bold mb-0 {{$empresa->estatus ? 'text-cyan-100 bg-cyan-500' : 'text-red-100 bg-red-500'}} rounded-lg">{{$empresa->estatus ? 'activo' : 'inactivo'}}</p></td>
                                        {{-- <td class="text-center text-uppercase"><p class=" font-weight-bold">{{$empresa->estatus ? 'activo' : 'inactivo'}}</p></td> --}}
                                        <td class="text-center"><a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Editar empresa">
                                            {{-- <a wire:click="fichaempresa('{{$empresa->id}}')" rel="tooltip" title="Generar Ficha" type="button" class="text-warning font-bold py-2 px-2"><i class="material-icons">contact_page</i></a> --}}
                                            {{-- <a wire:click="carnet('{{$empresa->id}}')" rel="tooltip" title="Generar Carnet" type="button" class="text-danger font-bold py-2 px-2"><i class="material-icons">contact_page</i></a> --}}
                                            <a wire:click="editar('{{$empresa->id}}')" class=" text-success px-2 py-1 mb-0" type="button"><span class="material-symbols-outlined">person_edit</span></a>
                                            <a wire:click="borrar('{{$empresa->id}}')" class="text-danger font-bold py-2 px-2"><span class="material-symbols-outlined">person_cancel</span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{$empresa->links()}}
                    </div>
                @else
                    <div class="card-dody px-4 pt-2 py-8 pb-2">
                        <strong class="px-4 mt-8 font-bold">No existen Resultados</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade z-index: 50;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header w-full">
                    <div class="items-center text-center justify-center py-4 ">
                        <img src="{{asset('img/logoccs.png')}}" class="w-52 items-center flex">
                    </div>
                </div>
                <div class="modal-body">
                    <form action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Nombre</span>
                                            <input wire:model="nombre" type="text" class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900" />
                                        </div>
                                        @error('nombre') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo rif --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">RIF</span>
                                            <input wire:model="rif" type="text" class="w-full pl-2 border text-neutral-900 font-bold rounded-r-lg border-neutral-900" >
                                        </div>
                                        @error('rif') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo cedula --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Cédula</span>
                                            <input wire:model="cedula" type="text"  class="w-full pl-3 border px-3 py-[0.25rem] border-solid text-neutral-900 font-bold outline-2 border-slate-900" onkeypress="$(this).mask('00000000')" maxlength="8">
                                            <input wire:click="consultar" type="button" value="Buscar" class="bg-gradient-primary px-2 py-[0.25rem] rounded-tr-lg rounded-br-lg text-white font-bold ">
                                        </div>
                                        @error('cedula') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombres --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Nombres</span>
                                            <input wire:model="nombres" type="text" class="w-full pl-2 border text-neutral-900 font-bold rounded-r-lg border-neutral-900" >
                                        </div>
                                        @error('nombres') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo apellidos --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Apellidos</span>
                                            <input wire:model="apellidos" type="text" class="w-full pl-2 border text-neutral-900 font-bold rounded-r-lg border-neutral-900" >
                                        </div>
                                        @error('apellidos') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Telefono</span>
                                            <input wire:model="telefono" type="text" class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900" />
                                        </div>
                                        @error('telefono') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Tipo de Materiales</span>
                                            <select wire:model="tipo_materiales" class="relative m-0 -ml-px block w-[1px] min-w-0 flex-auto rounded-r-lg border border-solid border-neutral-900 bg-clip-padding px-3 py-[0.25rem] font-bold leading-[1.6] text-neutral-900 outline-2 transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary">
                                                <option value="">Seleccione</option>
                                            </select>
                                        </div>
                                        @error('telefono') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Dirección</span>
                                            <input wire:model="direccion" type="text" class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900" />
                                        </div>
                                        @error('direccion') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <div class="fileinput fileinput-new text-white text-center" data-provides="fileinput">
                                                <span class="btn btn-raised btn-round bg-cyan-900 btn-file">
                                                  <span class="fileinput-new text-white">Patente:</span>
                                                  <input type="file" name="patente" id="patente" accept="application/pdf, .pdf">
                                                </span>
                                              </div>
                                        </div>
                                        @error('patente') <div class="">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <div class="fileinput fileinput-new text-white text-center" data-provides="fileinput">
                                                <span class="btn btn-raised btn-round bg-cyan-900 btn-file">
                                                  <span class="fileinput-new text-white">Conformidad de Uso:</span>
                                                  <input type="file" name="patente" id="patente" accept="application/pdf, .pdf">
                                                </span>
                                              </div>
                                        </div>
                                        @error('patente') <div class="">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <div class="fileinput fileinput-new text-white text-center" data-provides="fileinput">
                                                <span class="btn btn-raised btn-round bg-cyan-900 btn-file">
                                                  <span class="fileinput-new text-white">RUNPA:</span>
                                                  <input type="file" name="patente" id="patente" accept="application/pdf, .pdf">
                                                </span>
                                              </div>
                                        </div>
                                        @error('patente') <div class="">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 py-2">
                                <h1 class="text-center text-2xl text-info text-gradient">{{ __('GEOREFERENCIACIÓN') }}</h1>
                            </div>
                        </div>
                        <div class="items-center">
                            <div wire:ignore id="map" style= "width: 100%; height: 600px; z-index: 100;" class="mb-4"></div>
                        </div>
                        <div class="row">
                            <label>COORDENADA UTM</label>
                            <div class="col-sm-3">
                                <input wire:model="lat" type="text" name="latitud" value="10.494134" id="latitud" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <input wire:model="lon" type="text" name="longitud" value="-66.931854" id="longitud" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                        <button type="button" data-bs-dismiss="modal" class="w-32 bg-gradient-to-r from-red-400 to-red-600 font-bold text-white py-2 rounded-lg mx-auto block mb-2">SALIR</button>
                    </span>
                    <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                        <button type="submit" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2" wire:click.prevent="guardar()" >GUARDAR</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        var marker;
        var coords = {};
        initMap = function () 
        {
        navigator.geolocation.getCurrentPosition(
            function (position){
            coords =  {
                lng: position.coords.longitude,
                lat: position.coords.latitude
            };
            setMapa(coords);
            },function(error){console.log(error);});
        }
        function setMapa (coords)
        {
        var map = new google.maps.Map(document.getElementById('map'),
        {
            zoom: 13,
            center:new google.maps.LatLng(coords.lat,coords.lng),
        });
        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: new google.maps.LatLng(coords.lat,coords.lng),
    
        });
        marker.addListener( 'dragend', function (event)
        {
            document.getElementById("latitud").value = this.getPosition().lat();
            document.getElementById("longitud").value = this.getPosition().lng();
        });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZhH6WXRQpmvkrpZ6w-kBIQTqOwHuPncI&callback=initMap&v=weekly" defer></script>