<div class="fixed z-40 inset-0 overflow-y-auto ease-out duration-400">
    @if(session()->has('success')== 'success')
        @include('livewire.components.success')
    @endif
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center  sm:p-0 min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px] min-[1200px]:max-w-[1140px]">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:h-screen"></span>
        <div class="inline-block bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-2xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
            <div class="flex items-center justify-center">
                <div class="p-4 w-full bg-white rounded-lg">
                    <div class="flex items-center justify-center pt-8">
                        <img src="{{asset('img/logoccs.png')}}" class=" w-40">
                    </div>
                    <h3 class="text-2xl text-cyan-400 font-extrabold text-center mt-4">REGISTRAR MATERIALES</h3>
                    <h2 class="text-2xl text-cyan-800 font-semibold text-center text-uppercase mt-4">Empresa: {{$nombreEmpresa}}</h2>
                    <form>
                        <div class="row mt-4">
                            <div class="col-xl-12 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4">
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Tipo de Material</span>
                                            <select wire:model="tipoMaterialesId" class="relative m-0 -ml-px block w-[1px] min-w-0 flex-auto rounded-r-lg border border-solid border-neutral-900 bg-clip-padding px-3 py-[0.25rem] font-bold leading-[1.6] text-neutral-900 outline-2 transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary">
                                                <option value="">Seleccione</option>
                                                @foreach ($tipos_materiales as $tipo_material)
                                                    <option value="{{$tipo_material->id}}">{{$tipo_material->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('tipoMaterialesId') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 sm:px-6 sm:flex">
                            <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                                <button type="submit" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2" wire:click.prevent="guardarMaterial()"  >GUARDAR</button>
                            </span>
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