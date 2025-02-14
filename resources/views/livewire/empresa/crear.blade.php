<div class="main-content mt-5">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4 mx-4">
          @if(session()->has('yaregistrado')== 'yaregistrado')
            @include('livewire.components.yaregistrado')
          @endif
          <div>    
            <div class="min-h-screen flex items-center justify-center">
                <div class="p-4 w-full bg-white rounded-lg">
                    <h3 class=" mt-4 text-2xl text-cyan-400 font-bold text-center">REGISTRAR NUEVA EMPRESA</h3>
                    <form action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Empresa</span>
                                            <input wire:model="nombre" type="text" class="w-full pl-3 border text-uppercase border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900" onkeyup="this.value = this.value.toUpperCase();"/>
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
                                            <input wire:model="rif" type="text" class="w-full pl-2 border text-uppercase text-neutral-900 font-bold rounded-r-lg border-neutral-900" onkeyup="this.value = this.value.toUpperCase();" >
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
                                            <input wire:model="cedula" type="text"  class="w-full pl-3 border px-3 py-[0.25rem] border-solid rounded-r-lg text-neutral-900 font-bold outline-2 border-slate-900" onkeypress="$(this).mask('00000000')" maxlength="8">
                                            {{-- <input wire:click="consultar" type="button" value="Buscar" class="bg-gradient-primary px-2 py-[0.25rem] rounded-tr-lg rounded-br-lg text-white font-bold "> --}}
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
                                            <input wire:model="nombres" type="text" class="w-full pl-2 border text-uppercase text-neutral-900 font-bold rounded-r-lg border-neutral-900" onkeyup="this.value = this.value.toUpperCase();">
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
                                            <input wire:model="apellidos" type="text" class="w-full pl-2 border text-uppercase text-neutral-900 font-bold rounded-r-lg border-neutral-900" onkeyup="this.value = this.value.toUpperCase();">
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
                                            <input wire:model="telefono" type="text" class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900" onkeypress="$(this).mask('(0000)000 0000')" placeholder="(0000)000 0000"/>
                                        </div>
                                        @error('telefono') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Correo</span>
                                            <input wire:model="correo" type="email" class="w-full pl-2 border text-neutral-900 font-bold rounded-r-lg border-neutral-900" >
                                        </div>
                                        @error('correo') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo rif --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Parroquia</span>
                                            <select wire:model="parroquiaId" class="relative m-0 -ml-px block w-[1px] min-w-0 flex-auto rounded-r-lg border border-solid border-neutral-900 bg-clip-padding px-3 py-[0.25rem] font-bold leading-[1.6] text-neutral-900 outline-2 transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary">
                                                <option value="">Seleccione</option>
                                                @foreach ($parroquias as $parroquia)
                                                    <option value="{{$parroquia->id}}">{{$parroquia->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('parroquiaId') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo rif --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Categoría</span>
                                            <select wire:model="categoriaId" class="relative m-0 -ml-px block w-[1px] min-w-0 flex-auto rounded-r-lg border border-solid border-neutral-900 bg-clip-padding px-3 py-[0.25rem] font-bold leading-[1.6] text-neutral-900 outline-2 transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary">
                                                <option value="">Seleccione</option>
                                                @foreach ($categorias as $categoria)
                                                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('categoriaId') <div class="text-danger">{{ $message }}</div> @enderror
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
                                            <input wire:model="direccion" type="text" class="w-full text-uppercase pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900" onkeyup="this.value = this.value.toUpperCase();"/>
                                        </div>
                                        @error('direccion') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-xl-4 col-sm-12 mb-xl-0 d-none d-xl-block">
                                <div class="flex items">
                                    <span class="">¿Posee Patente?</span>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 mb-xl-0 d-none d-xl-block">
                                <div class="flex items">
                                    <span class="">¿Posee Conformidad de Uso?</span>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 mb-xl-0 d-none d-xl-block">
                                <div class="flex items">
                                    <span class="">¿Posee Runpa?</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <span class="d-xl-none">¿Posee Patente?</span>
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center"> {{-- campo cedula --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <!-- component -->
                                            <label>
                                                <input type="radio" value="1" {{isset($posee_patente) ? 'checked' : ''}} class="peer hidden"  name="patente" wire:model="posee_patente">
                                                <div class="hover:bg-blue-500 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm  border-gray-200 group peer-checked:border-blue-700  peer-checked:bg-blue-400">
                                                    <h2 class="font-medium text-gray-700">SI</h2>
                                                </div>
                                            </label>

                                            <label>
                                                <input type="radio" value="0" {{isset($posee_patente) ? 'checked' : ''}} class="peer hidden" name="patente" wire:model="posee_patente">
                                                <div class="hover:bg-red-500 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm  border-gray-200 group peer-checked:border-red-500 peer-checked:text-white peer-checked:bg-red-400">
                                                    <h2 class="font-medium text-gray-700">NO</h2>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="d-xl-none">¿Posee Conformidad de Uso?</span>
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center"> {{-- campo cedula --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <!-- component -->
                                            <label>
                                                <input type="radio" value="1" {{isset($posee_conformidad) ? 'checked' : ''}} class="peer hidden"  name="conformidad" wire:model="posee_conformidad">
                                                <div class="hover:bg-blue-500 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm  border-gray-200 group peer-checked:border-blue-700  peer-checked:bg-blue-400">
                                                    <h2 class="font-medium text-gray-700">SI</h2>
                                                </div>
                                            </label>

                                            <label>
                                                <input type="radio" value="0" {{isset($posee_conformidad) ? 'checked' : ''}} class="peer hidden" name="conformidad" wire:model="posee_conformidad">
                                                <div class="hover:bg-red-500 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm  border-gray-200 group peer-checked:border-red-500 peer-checked:text-white peer-checked:bg-red-400">
                                                    <h2 class="font-medium text-gray-700">NO</h2>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="d-xl-none">¿Posee Runpa?</span>
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center"> {{-- campo cedula --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <!-- component -->
                                            <label>
                                                <input type="radio" value="1" {{isset($posee_runpa) ? 'checked' : ''}} class="peer hidden"  name="framework" wire:model="posee_runpa">
                                                <div class="hover:bg-blue-500 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm  border-gray-200 group peer-checked:border-blue-700  peer-checked:bg-blue-400">
                                                    <h2 class="font-medium text-gray-700">SI</h2>
                                                </div>
                                            </label>

                                            <label>
                                                <input type="radio" value="0" {{isset($posee_runpa) ? 'checked' : ''}} class="peer hidden" name="framework" wire:model="posee_runpa">
                                                <div class="hover:bg-red-500 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm  border-gray-200 group peer-checked:border-red-500 peer-checked:text-white peer-checked:bg-red-400">
                                                    <h2 class="font-medium text-gray-700">NO</h2>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Vencimiento Patente</span>
                                            <input wire:model="fecha_patente" type="date" class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900" />
                                        </div>
                                        @error('fecha_patente') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                            </div>
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Vencimiento RUNPA</span>
                                            <input wire:model="fecha_runpa" type="date" class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900" onkeypress="$(this).mask('00000000')"/>
                                        </div>
                                        @error('fecha_runpa') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class=" my-4 text-2xl text-cyan-400 font-bold text-center">SUBIR DOCUMENTOS LEGALES</h3>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class=" max-w-xs">
                                            <label for="patente" class="mb-1 block text-sm font-medium text-gray-700"><b>PATENTE DE INDUSTRIA Y COMERCIO</b></label>
                                            <input id="patentePDF" type="file" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-cyan-900 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                        </div>
                                        @error('fecha_patente') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class=" max-w-xs">
                                            <label for="patente" class="mb-1 block text-sm font-medium text-gray-700"><b>CONFORMIDAD DE USO</b></label>
                                            <input id="patentePDF" type="file" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-cyan-900 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                        </div>
                                        @error('fecha_patente') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class=" max-w-xs">
                                            <label for="patente" class="mb-1 block text-sm font-medium text-gray-700"><b>RUNPA</b></label>
                                            <input id="patentePDF" type="file" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-cyan-900 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                        </div>
                                        @error('fecha_patente') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class=" max-w-xs">
                                            <label for="patente" class="mb-1 block text-sm font-medium text-gray-700"><b>REGISTRO MERCANTIL</b></label>
                                            <input id="patentePDF" type="file" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-cyan-900 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                        </div>
                                        @error('fecha_patente') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class=" max-w-xs">
                                            <label for="patente" class="mb-1 block text-sm font-medium text-gray-700"><b>RIF VIGENTE</b></label>
                                            <input id="patentePDF" type="file" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-cyan-900 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                        </div>
                                        @error('fecha_patente') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class=" max-w-xs">
                                            <label for="patente" class="mb-1 block text-sm font-medium text-gray-700"><b>SOLVENCIA MUNICIPAL DE INMUEBLE Y ASEO</b></label>
                                            <input id="patentePDF" type="file" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-cyan-900 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                        </div>
                                        @error('fecha_patente') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class=" max-w-xs">
                                            <label for="patente" class="mb-1 block text-sm font-medium text-gray-700"><b>PROPIEDAD DEL ARRENDAMIENTO</b></label>
                                            <input id="patentePDF" type="file" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-cyan-900 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                        </div>
                                        @error('fecha_patente') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class=" max-w-xs">
                                            <label for="patente" class="mb-1 block text-sm font-medium text-gray-700"><b>CARTA CATASTRAL</b></label>
                                            <input id="patentePDF" type="file" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-cyan-900 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                        </div>
                                        @error('fecha_patente') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class=" max-w-xs">
                                            <label for="patente" class="mb-1 block text-sm font-medium text-gray-700"><b>CROQUIS DE UBICACIÓN</b></label>
                                            <input id="patentePDF" type="file" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-cyan-900 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                        </div>
                                        @error('fecha_patente') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class=" max-w-xs">
                                            <label for="patente" class="mb-1 block text-sm font-medium text-gray-700"><b>PLAN DE EMERGENCIA Y CONTINGENCIA</b></label>
                                            <input id="patentePDF" type="file" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-cyan-900 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                        </div>
                                        @error('fecha_patente') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class=" max-w-xs">
                                            <label for="patente" class="mb-1 block text-sm font-medium text-gray-700"><b>CERTIFICACIÓN DE ORIGEN</b></label>
                                            <input id="patentePDF" type="file" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-cyan-900 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                        </div>
                                        @error('fecha_patente') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class=" max-w-xs">
                                            <label for="patente" class="mb-1 block text-sm font-medium text-gray-700"><b>CERTIFICADO DE RIESGO</b></label>
                                            <input id="patentePDF" type="file" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-cyan-900 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                        </div>
                                        @error('fecha_patente') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class=" my-4 text-2xl text-cyan-400 font-bold text-center">TIPOS DE MATERIALES</h3>
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-gray-700 font-bold font-weight-bolder opacity-7">#</th>
                                    <th class="text-center text-uppercase text-gray-700 font-bold font-weight-bolder opacity-7">Material</th>
                                    <th class="text-center text-uppercase text-gray-700 font-bold font-weight-bolder opacity-7">acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($materiales > 0)
                                <?php $indice = 0; ?>
                                    @foreach ($empresa->tipo_materiales as $material)
                                        <?php $indice += 1; ?>
                                        <tr>
                                            <td class="ps-4 text-center"><p class="text-xs font-weight-bold mb-0"><?php echo $indice; ?></p></td>
                                            <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0"></p>{{$material->nombre}}</td>
                                            <td class="text-center"><a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Editar Integrante">
                                                @if (auth()->user()->nivel_id == 1)
                                                    <a href="#" wire:click="borrarIntegrante('{{$material->id}}')" class=" text-danger font-bold py-2 px-4"><span class="material-symbols-outlined">person_cancel</span></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <h3 class=" my-4 text-2xl text-cyan-400 font-bold text-center">GEORREFERENCIACIÓN</h3>
                        <div class="items-center">
                            <div wire:ignore id="map" style= "width: 100%; height: 600px; z-index: 100;" class="mb-4"></div>
                        </div>
                        <div class="row">
                            <label>COORDENADA UTM</label>
                            <div class="col-sm-3">
                                <input wire:model.live="lat" type="text" name="latitud" value="10.494134" id="latitud" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <input wire:model.live="lon" type="text" name="longitud" value="-66.931854" id="longitud" class="form-control">
                            </div>
                        </div>
                        <div class="px-4 py-3 sm:px-6 sm:flex">                                  
                            <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                              <button type="bottom" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white  rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2" wire:click.prevent="guardar()">GUARDAR</button>
                            </span>
                            <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                              <a href="{{route('empresa')}}" class="btn w-32 bg-gradient-to-r from-red-400 to-red-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">SALIR</a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <script>
    (g => {
        var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__", m = document, b = window;
        b = b[c] || (b[c] = {});
        var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams, u = () => h || (h = new Promise(async (f, n) => {
            await (a = m.createElement("script"));
            e.set("libraries", [...r] + "");
            for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
            e.set("callback", c + ".maps." + q);
            a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
            d[q] = f;
            a.onerror = () => h = n(Error(p + " could not load."));
            a.nonce = m.querySelector("script[nonce]")?.nonce || "";
            m.head.append(a);
        }));
        d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n));
    })({
        key: "AIzaSyCZhH6WXRQpmvkrpZ6w-kBIQTqOwHuPncI",
        v: "weekly",
    });

    let map;
    let marker;

    async function initMap() {
        const position = { lat: {{isset($lat) ? $lat : '10.508248641257252'}}, lng: {{isset($lon) ? $lon : '-66.91428145941548'}} };
        const { Map } = await google.maps.importLibrary("maps");

        // Crear el mapa
        map = new Map(document.getElementById("map"), {
            zoom: 12,
            center: position,
            mapId: "DEMO_MAP_ID",
            mapTypeId: "satellite",
        });

        // Crear el marcador con la opción draggable: true
        marker = new google.maps.Marker({
            map,
            position: position,
            draggable: true, // Habilitar arrastre
        });

        // Escuchar eventos de arrastre
        marker.addListener("dragend", (event) => {
            const newPosition = event.latLng;
            console.log("Nueva posición del marcador:", newPosition.lat(), newPosition.lng());
        });
        marker.addListener( 'dragend', function (event)
      {
        @this.set('lat', this.getPosition().lat());
        @this.set('lon', this.getPosition().lng());
        // this.set('longitud', this.getPosition().lon(););
        // document.getElementById("latitud").value = this.getPosition().lat();
        // document.getElementById("longitud").value = this.getPosition().lng();
      });
    }

    initMap();
    </script>

