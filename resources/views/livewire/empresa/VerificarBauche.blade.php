<div class="fixed z-50 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:h-screen"></span>
        <div class="inline-block bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8  sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
            <div class="flex items-center justify-center -mt-20">
                <div class="p-4 w-full bg-white rounded-lg">
                    <div class="flex items-center justify-center pt-8">
                        <img src="{{asset('/img/logoccs.png')}}" class=" w-40">
                    </div>
                    <h3 class="text-2xl text-cyan-400 font-extrabold text-center mt-4">VERIFICACIÓN DE PAGO</h3>
                    <h2 class="text-2xl text-cyan-800 font-semibold text-center text-uppercase mt-4">Empresa: {{$nombreEmpresa}}</h2>
                        <h4 class=" text-cyan-800 font-semibold text-center text-uppercase mt-4 mb-2">DATOS DEL PAGO:</h4>
                        <div class="row mt-4">
                            <div class="col-xl-12 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">BANCO</span>
                                            <input value="{{$empresa->banco->nombre}}" disabled type="text" class="w-full pl-3 border text-uppercase border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">REFERENCIA</span>
                                            <input value="{{$empresa->referencia}}" type="text" disabled class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900" placeholder="0000"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">FECHA DEL PAGO</span>
                                            <input value="{{$empresa->fecha_pago}}" disabled type="date" class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-xl-12 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class="max-w-xs">
                                            @if ($empresa->bauche)
                                                <div class="flex items-center justify-center">
                                                    <img width="400" height="500" src="{{asset($bauche)}}" alt="">
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 mb-xl-0">
                                @if($empresa->bauche)
                                    <div class="flex flex-wrap bg-white justify-center">
                                        <div class="flex space-x-4">
                                            @if($empresa->aprobado == 0 || $empresa->aprobado == 2)
                                                <button wire:click="aprobar('bauche')" class="flex items-center justify-center bg-success hover:bg-successActive rounded-full p-4 h-10 w-10 transition duration-300">
                                                    <span class="material-symbols-outlined text-white">check_circle</span>
                                                </button>
                                            @endif
                                            @if($empresa->aprobado == 0 || $empresa->aprobado == 1)
                                                <button wire:click="reprobar('bauche')" class="flex items-center justify-center bg-danger hover:bg-dangerActive rounded-full p-4 h-10 w-10 transition duration-300">
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
                                <button type="submit" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2" wire:click.prevent="guardarBauche()"  >GUARDAR</button>
                            </span>
                            <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                                <button type="button" class="w-32 bg-gradient-to-r from-red-400 to-red-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2" wire:click="cerrarModal()">SALIR</button>
                            </span>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>