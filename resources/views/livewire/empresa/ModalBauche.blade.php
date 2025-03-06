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
                        <img src="{{asset('img/logoccs.png')}}" class=" w-40">
                    </div>
                    <h3 class="text-2xl text-cyan-400 font-extrabold text-center mt-4">REGISTRO DE PAGO</h3>
                    <h2 class="text-2xl text-cyan-800 font-semibold text-center text-uppercase mt-4">Empresa: {{$nombreEmpresa}}</h2>
                    <h2 class="text-2xl text-cyan-800 font-semibold text-center text-uppercase mt-4">Monto a Pagar: <b class=" text-red-900">120 €</b></h2>
                    <h5 class=" text-center"><i>"A la taza del BCV del dia en que se hace la transferencia."</i></h5>
                    <form>
                        <h4 class=" text-cyan-800 font-semibold text-center text-uppercase mt-4">Realiza tu pago a:</h4>
                        <div class="row">
                            <div class="col-6">BANCO:</div><div class="col-6">Banco de Venezuela S.A</div>
                            <div class="col-6">RIF:</div><div class="col-6">G-200172304</div>
                            <div class="col-6">A NOMBRE DE:</div><div class="col-6">FUND ECONOMIA CIRC Y ENERG INGRESOS PROPIOS</div>
                            <div class="col-6">CUENTA:</div><div class="col-6">0102-0762-26-00-00123466</div>
                        </div>
                        <h4 class=" text-cyan-800 font-semibold text-center text-uppercase mt-4 mb-2">DATOS DEL PAGO:</h4>
                        <div class="row mt-4">
                            <div class="col-xl-12 col-sm-12 mb-xl-0">
                                @if ($empresa->aprobado == 1)
                                    <div class="text-white center uppercase bg-green-600 mb-2"><b>PAGO VERIFICADO</b></div>
                                @endif
                                @if ($empresa->aprobado == 2)
                                    <div class="text-white center uppercase bg-red-600 mb-2"><b>pago no aprobado, por favor verificar</b></div>
                                @endif
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">BANCO</span>
                                            <select wire:model="bancoId" {{$empresa->aprobado == 1 ? 'disabled' : ''}} class="relative m-0 -ml-px block w-[1px] min-w-0 flex-auto rounded-r-lg border border-solid border-neutral-900 bg-clip-padding px-3 py-[0.25rem] font-bold leading-[1.6] text-neutral-900 outline-2 transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary read-only:true">
                                                <option value="">Seleccione</option>
                                                @foreach ($bancos as $banco)
                                                    <option value="{{$banco->id}}">{{$banco->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('bancoId') <div class="text-danger">{{ $message }}</div> @enderror
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
                                            <input wire:model="referencia" type="number" {{$empresa->aprobado == 1 ? 'disabled' : ''}} class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900" placeholder="0000"/>
                                        </div>
                                        @error('referencia') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">MONTO</span>
                                            <input wire:model="monto" type="number" step=".01" {{$empresa->aprobado == 1 ? 'disabled' : ''}} class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                        </div>
                                        @error('monto') <div class="text-danger">{{ $message }}</div> @enderror
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
                                            <input wire:model="fecha_pago" type="date" {{$empresa->aprobado == 1 ? 'disabled' : ''}} class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                                        </div>
                                        @error('fecha_pago') <div class="text-danger">{{ $message }}</div> @enderror
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
                                            <label for="bauche" class="mb-1 block text-sm font-medium text-gray-700"><b>BAUCHE DE PAGO</b></label>
                                            @if ($empresa->aprobado <> 1)
                                                <input id="bauche" type="file" wire:model="bauche" class="relative flex mt-2 min-w-0 rounded-lg border text-sm file:mr-4 file:rounded-md file:border-0 file:bg-cyan-900 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" accept="image/png,image/jpeg,image/jpg"/>
                                            @endif
                                        </div>
                                        @error('bauche') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 sm:px-6 sm:flex">
                            @if ($empresa->aprobado <> 1)
                                <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                                    <button type="submit" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2" wire:click.prevent="guardarBauche()"  >GUARDAR</button>
                                </span>
                            @endif
                            <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                                <button type="button" class="w-32 bg-gradient-to-r from-red-400 to-red-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2" wire:click="cerrarModal()">SALIR</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>