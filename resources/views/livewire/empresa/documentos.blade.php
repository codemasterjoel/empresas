<div class="fixed z-40 inset-0 overflow-y-auto ease-out duration-400">
    @if(session()->has('success')== 'success')
        @include('livewire.components.aprobado')
    @endif
    @if(session()->has('fail')== 'fail')
        @include('livewire.components.rechazado')
    @endif
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:p-0 min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px] min-[1200px]:max-w-[1140px]">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div id="modal" class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-6xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
            <div class=" flex items-center justify-center">
                <div class="p-4 w-full bg-white rounded-lg">
                    <div class="flex items-center justify-center">
                        <img src="{{asset('img/logoccs.png')}}" class=" w-40">
                    </div>
                    <h3 class=" mt-4 text-2xl text-cyan-400 font-bold text-center">DATOS DE LA EMPRESA</h3>
                    <div class="row"> {{-- campo nombre --}}
                        <div class="col-xl-12 col-sm-12 mb-xl-0">
                            <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">EMPRESA</span>
                                        <input wire:model="nombre" disabled type="text" class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-sm-12 mb-xl-0"> {{-- campo Tipo RIF --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">TIPO DE RIF</span>
                                        <input wire:model="tipoRIF" disabled type="text" class="w-full pl-3 border text-uppercase border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-xl-0"> {{-- campo RIF --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">RIF</span>
                                        <input wire:model="rif" disabled type="text" class="w-full pl-3 border text-uppercase border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-sm-12 mb-xl-0"> {{-- campo Categoria --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Categoría</span>
                                        <input disabled value="{{$empresa->categoria->nombre}}" type="text" class="w-full pl-3 border text-uppercase border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"> {{-- campo Parroquia --}}
                        <div class="col-xl-6 col-sm-12 mb-xl-0">
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="flex text-uppercase bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Parroquia</span>
                                        <input value="{{$empresa->parroquia->nombre}}" disabled type="text" class="w-full pl-3 border text-uppercase border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">{{-- campo Direccion --}}
                        <div class="col-xl-12 col-sm-12 mb-xl-0">
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="flex text-uppercase bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">dirección</span>
                                        <input wire:model="direccion" disabled type="text" class="w-full pl-3 border text-uppercase border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class=" mt-2 text-2xl text-cyan-400 font-bold text-center">DATOS DEL PROPIETARIO</h3>
                    <div class="row">
                        <div class="col-xl-3 col-sm-12 mb-xl-0"> {{-- campo Nacionalidad --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="flex text-uppercase bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Nacionalidad</span>
                                        <input value="{{$empresa->letra}}" disabled type="text" class="w-full pl-3 border text-uppercase border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-xl-0"> {{-- campo Cedula --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="flex text-uppercase bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Cédula</span>
                                        <input wire:model="cedula" disabled type="text" class="w-full pl-3 border text-uppercase border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-sm-12 mb-xl-0"> {{-- campo Nombres --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="flex text-uppercase bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Nombres</span>
                                        <input wire:model="nombres" disabled type="text" class="w-full pl-3 border text-uppercase border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-12 mb-xl-0"> {{-- campo Apellidos --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="flex text-uppercase bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Apellidos</span>
                                        <input wire:model="apellidos" disabled type="text" class="w-full pl-3 border text-uppercase border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-sm-12 mb-xl-0">{{-- campo Telefono --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="flex text-uppercase bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">telefono</span>
                                        <input wire:model="telefono" disabled type="text" class="w-full pl-3 border text-uppercase border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-12 mb-xl-0"> {{-- campo Correo --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="flex text-uppercase bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Correo</span>
                                        <input wire:model="correo" disabled type="text" class="w-full pl-3 border text-uppercase border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-2 text-2xl text-cyan-400 font-bold text-center">DOCUMENTOS LEGALES</h3>

                    <div class="row pb-2">
                        <div class="col-xl-4 col-sm-12 mb-xl-0">{{-- PDF PATENTE --}}
                            <div class="flex items-center justify-center">
                                <div class="w-full rounded-lg">
                                    <div class=" max-w-xs">
                                        @if ($patentePDF)
                                            <iframe width="300" height="500" src="{{asset($patentePDF)}}" frameborder="0"></iframe>  
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if ($patentePDF)
                                <div class="flex flex-wrap bg-white justify-center">
                                    <div class="flex space-x-4">
                                        @if($patente == 0 || $patente == 2)
                                            <button wire:click="aprobar('patentePDF')"  class="flex items-center justify-center bg-success hover:bg-successActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">check_circle</span>
                                            </button>
                                        @endif
                                        @if($patente == 0 || $patente == 1)
                                            <button wire:click="reprobar('patentePDF')" class="flex items-center justify-center bg-danger hover:bg-dangerActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">cancel</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-xl-0"> {{-- PDF CONFORMIDAD --}}
                            <div class="flex items-center justify-center">
                                <div class="w-full rounded-lg">
                                    <div class=" max-w-xs">
                                        @if ($conformidadPDF)
                                            <iframe width="300" height="500" src="{{asset($conformidadPDF)}}" frameborder="0"></iframe>  
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($conformidadPDF)
                                <div class="flex flex-wrap bg-white justify-center">
                                    <div class="flex space-x-4">
                                        @if($conformidad == 0 || $conformidad == 2)
                                            <button wire:click="aprobar('conformidadPDF')" class="flex items-center justify-center bg-success hover:bg-successActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">check_circle</span>
                                            </button>
                                        @endif
                                        @if($conformidad == 0 || $conformidad == 1)
                                            <button wire:click="reprobar('conformidadPDF')" class="flex items-center justify-center bg-danger hover:bg-dangerActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">cancel</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-xl-0"> {{-- PDF RUNPA --}}
                            <div class="flex items-center justify-center">
                                <div class="w-full rounded-lg">
                                    <div class=" max-w-xs">
                                        @if ($runpaPDF)
                                            <iframe width="300" height="500" src="{{asset($runpaPDF)}}" frameborder="0"></iframe>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($runpaPDF)
                            <div class="flex flex-wrap bg-white justify-center">
                                <div class="flex space-x-4">
                                    @if($runpa == 0 || $runpa == 2)
                                        <button wire:click="aprobar('runpaPDF')" class="flex items-center justify-center bg-success hover:bg-successActive rounded-full p-4 h-10 w-10 transition duration-300">
                                            <span class="material-symbols-outlined text-white">check_circle</span>
                                        </button>
                                    @endif
                                    @if($runpa == 0 || $runpa == 1)
                                        <button wire:click="reprobar('runpaPDF')" class="flex items-center justify-center bg-danger hover:bg-dangerActive rounded-full p-4 h-10 w-10 transition duration-300">
                                            <span class="material-symbols-outlined text-white">cancel</span>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-sm-12 mb-xl-0">{{-- PDF REGISTRO MERCANTIL --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class=" max-w-xs">
                                        @if ($rmercantilPDF)
                                            <iframe width="300" height="500" src="{{asset($rmercantilPDF)}}" frameborder="0"></iframe>  
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($rmercantilPDF)
                                <div class="flex flex-wrap bg-white justify-center">
                                    <div class="flex space-x-4">
                                        @if($rmercantil == 0 || $rmercantil == 2)
                                            <button wire:click="aprobar('rmercantilPDF')" class="flex items-center  justify-center bg-success hover:bg-successActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">check_circle</span>
                                            </button>
                                        @endif
                                        @if($rmercantil == 0 || $rmercantil == 1)
                                            <button wire:click="reprobar('rmercantilPDF')" class="flex items-center justify-center bg-danger hover:bg-dangerActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">cancel</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-xl-0"> {{-- PDF RIF --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class=" max-w-xs">
                                        @if ($rifPDF)
                                            <iframe width="300" height="500" src="{{asset($rifPDF)}}" frameborder="0"></iframe>  
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($rifPDF)
                                <div class="flex flex-wrap bg-white justify-center">
                                    <div class="flex space-x-4">
                                        @if($rif2 == 0 || $rif2 == 2)
                                            <button wire:click="aprobar('rifPDF')" class="flex items-center justify-center bg-success hover:bg-successActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">check_circle</span>
                                            </button>
                                        @endif
                                        @if($rif2 == 0 || $rif2 == 1)
                                            <button wire:click="reprobar('rifPDF')" class="flex items-center justify-center bg-danger hover:bg-dangerActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">cancel</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-xl-0"> {{-- PDF SOLVENCIA MUNICIPAL --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class=" max-w-xs">
                                        @if ($solvenciaPDF)
                                            <iframe width="300" height="500" src="{{asset($solvenciaPDF)}}" frameborder="0"></iframe>  
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($solvenciaPDF)
                                <div class="flex flex-wrap bg-white justify-center">
                                    <div class="flex space-x-4">
                                        @if($solvencia == 0 || $solvencia == 2)
                                            <button wire:click="aprobar('solvenciaPDF')" class="flex items-center justify-center bg-success hover:bg-successActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">check_circle</span>
                                            </button>
                                        @endif
                                        @if($solvencia == 0 || $solvencia == 1)
                                            <button wire:click="reprobar('solvenciaPDF')" class="flex items-center justify-center bg-danger hover:bg-dangerActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">cancel</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-sm-12 mb-xl-0">{{-- PDF ARRENDAMIENTO --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class=" max-w-xs">
                                        @if ($arrendamientoPDF)
                                            <iframe width="300" height="500" src="{{asset($arrendamientoPDF)}}" frameborder="0"></iframe>  
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if ($arrendamientoPDF)
                                <div class="flex flex-wrap bg-white justify-center">
                                    <div class="flex space-x-4">
                                        @if($arrendamiento == 0 || $arrendamiento == 2)
                                            <button wire:click="aprobar('arrendamientoPDF')" class="flex items-center justify-center bg-success hover:bg-successActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">check_circle</span>
                                            </button>
                                        @endif
                                        @if($arrendamiento == 0 || $arrendamiento == 1)
                                            <button wire:click="reprobar('arrendamientoPDF')" class="flex items-center justify-center bg-danger hover:bg-dangerActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">cancel</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-xl-0"> {{-- PDF FICHA CATASTRAL --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class=" max-w-xs">
                                        @if ($catastralPDF)
                                            <iframe width="300" height="500" src="{{asset($catastralPDF)}}" frameborder="0"></iframe>  
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if ($catastralPDF)
                                <div class="flex flex-wrap bg-white justify-center">
                                    <div class="flex space-x-4">
                                        @if($catastral == 0 || $catastral == 2)
                                            <button wire:click="aprobar('catastralPDF')" class="flex items-center justify-center bg-success hover:bg-successActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">check_circle</span>
                                            </button>
                                        @endif
                                        @if($catastral == 0 || $catastral == 1)
                                            <button wire:click="reprobar('catastralPDF')" class="flex items-center justify-center bg-danger hover:bg-dangerActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">cancel</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-xl-0"> {{-- PDF CROQUIS DE UBICACION --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class=" max-w-xs">
                                        @if ($croquisPDF)
                                            <iframe width="300" height="500" src="{{asset($croquisPDF)}}" frameborder="0"></iframe>  
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if ($croquisPDF)
                                <div class="flex flex-wrap bg-white justify-center">
                                    <div class="flex space-x-4">
                                        @if($croquis == 0 || $croquis == 2)
                                            <button wire:click="aprobar('croquisPDF')" class="flex items-center justify-center bg-success hover:bg-successActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">check_circle</span>
                                            </button>
                                        @endif
                                        @if($croquis == 0 || $croquis == 1)
                                            <button wire:click="reprobar('croquisPDF')" class="flex items-center justify-center bg-danger hover:bg-dangerActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">cancel</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-sm-12 mb-xl-0">{{-- PDF PLAN DE CONTINGENCIA --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class=" max-w-xs">
                                        @if ($planPDF)
                                            <iframe width="300" height="500" src="{{asset($planPDF)}}" frameborder="0"></iframe>  
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if ($planPDF)
                                <div class="flex flex-wrap bg-white justify-center">
                                    <div class="flex space-x-4">
                                        @if($plan == 0 || $plan == 2)
                                            <button wire:click="aprobar('planPDF')" class="flex items-center justify-center bg-success hover:bg-successActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">check_circle</span>
                                            </button>
                                        @endif
                                        @if($plan == 0 || $plan == 1)
                                            <button wire:click="reprobar('planPDF')" class="flex items-center justify-center bg-danger hover:bg-dangerActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">cancel</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-xl-0"> {{-- PDF CERTIFICADO DE ORIGEN --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class=" max-w-xs">
                                        @if ($origenPDF)
                                            <iframe width="300" height="500" src="{{asset($origenPDF)}}" frameborder="0"></iframe>  
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if ($origenPDF)
                                <div class="flex flex-wrap bg-white justify-center">
                                    <div class="flex space-x-4">
                                        @if($origen == 0 || $origen == 2)
                                            <button wire:click="aprobar('origenPDF')" class="flex items-center justify-center bg-success hover:bg-successActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">check_circle</span>
                                            </button>
                                        @endif
                                        @if($origen == 0 || $origen == 1)
                                            <button wire:click="reprobar('origenPDF')" class="flex items-center justify-center bg-danger hover:bg-dangerActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">cancel</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-xl-0"> {{-- PDF CERTIFICADO DE RIESGO --}}
                            <div class="flex items-center justify-center pb-4">
                                <div class="w-full rounded-lg">
                                    <div class=" max-w-xs">
                                        @if ($riesgoPDF)
                                            <iframe width="300" height="500" src="{{asset($riesgoPDF)}}" frameborder="0"></iframe>  
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if ($riesgoPDF)
                                <div class="flex flex-wrap bg-white justify-center">
                                    <div class="flex space-x-4">
                                        @if($riesgo == 0 || $riesgo == 2)
                                            <button wire:click="aprobar('riesgoPDF')" class="flex items-center justify-center bg-success hover:bg-successActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">check_circle</span>
                                            </button>
                                        @endif
                                        @if($riesgo == 0 || $riesgo == 1)
                                            <button wire:click="reprobar('riesgoPDF')" class="flex items-center justify-center bg-danger hover:bg-dangerActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                <span class="material-symbols-outlined text-white">cancel</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="px-4 py-3 sm:px-6 sm:flex">
                        <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                            <button type="button" class="w-32 bg-gradient-to-r from-red-400 to-red-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2" wire:click="cerrarModal()">SALIR</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if (Session::has('success'))
<script>
    Swal.fire({
        target: document.getElementById('modal'),
        title: "success 1",
        icon: "success",
        draggable: true
    });
</script>
@endif
@if (session('success')=='success')
<script>
    Swal.fire({
        target: document.getElementById('modal'),
        title: "success 2",
        icon: "success",
        draggable: true
    });
</script>
@endif