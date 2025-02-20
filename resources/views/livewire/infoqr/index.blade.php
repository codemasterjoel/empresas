<div class="min-h-screen flex items-center justify-center">
    <div class="p-4 w-full bg-white rounded-lg">
        <div class="flex items-center justify-center">
            <img src="{{asset('/img/logoccs.png')}}" class=" w-40">
        </div>
        <h3 class="text-2xl text-cyan-400 font-semibold text-center">DATOS DE LA EMPRESA</h3>
        <form>
            <div class="grid grid-cols-2 gap-4"> 
                <div class="flex items-center justify-center py-4"> {{-- campo cedula --}}
                    <div class="w-full rounded-lg bg-gray-500">
                        <div class="flex">
                            <input wire:model="cedula" type="number"  class="w-full bg-white pl-2 text-base border font-semibold outline-0 rounded-tl-lg rounded-bl-lg border-slate-200">
                            <input wire:click="consultar" type="button" value="Buscar" class="bg-gradient-primary p-2 rounded-tr-lg rounded-br-lg text-white font-semibold transition-colors">
                        </div>
                    </div>
                </div>
                <label class="relative inline-flex cursor-pointer items-center pb-4 py-4 "> {{-- campo activo --}}
                    <input type="checkbox" value="1" class="peer sr-only" wire:model.live="estatus" />
                    <div class=" peer flex flex-row-reverse h-8 items-center gap-4 rounded-full bg-cyan-600 px-3 after:absolute after:left-1 after: after:h-6 after:w-16 after:rounded-full after:bg-white/40 after:transition-all after:content-[''] peer-checked:bg-orange-600 cheked value='0' peer-checked:after:translate-x-full peer-focus:outline-none text-white">
                        <span>Activo</span>
                        <span>Inactivo</span>
                    </div>
                </label>
            </div>
            
            <div class="relative flex flex-wrap items-stretch pb-4"> {{-- campo Nombre y Apellido --}}
                <span class="flex bg-cyan-300 font-semibold text-white items-center whitespace-nowrap rounded-l-lg border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Nombre y Apellido</span>
                <input wire:model="nombreCompleto" type="text" class="rounded-0 relative m-0 block w-[1px] min-w-0 flex-auto border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary" />
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="relative flex flex-wrap items-stretch pb-4"> {{-- campo Fecha de Nacimiento --}}
                    <span class="flex bg-cyan-300 font-semibold text-white items-center whitespace-nowrap rounded-l-lg border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Fecha de Nacimiento</span>
                    <input wire:model="fechaNacimiento" type="date" aria-label="Last name" class="relative m-0 -ml-px block w-[1px] min-w-0 flex-auto rounded-r-lg border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary" />
                </div>

                <div class="flex items-center justify-center pb-4"> {{-- campo genero --}}
                    <div class="w-full rounded-lg bg-gray-500">
                        <div class="flex">
                            <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Genero</span>
                            <select wire:model="generoId" class="w-full px-4 py-2 border rounded-r-lg focus:outline-none focus:ring-2 focus:ring-cyan-500">
                                <option value="">Seleccione</option>
                            </select>
                            {{-- <input wire:model="generoId" type="text" class="w-full bg-white pl-2 text-base rounded-r-lg font-semibold outline-0 border-slate-200" />
                            <input wire:model="generoIdHidden" type="hidden" class="w-full bg-white pl-2 text-base rounded-r-lg font-semibold outline-0 border-slate-200" /> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center justify-center pb-4"> {{-- campo Telefono --}}
                    <div class="w-full rounded-lg bg-gray-500">
                        <div class="flex">
                            <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Telefono</span>
                            <input wire:model="telefono" type="text" class="w-full bg-white pl-2 text-base border rounded-r-lg font-semibold outline-0 border-slate-200" minlength="15" placeholder="(0000) 000-0000" onkeypress="$(this).mask('(0000) 000-0000')" title="SOLO SE PERMITE NUMEROS, 11 DIGITOS" />
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center pb-4"> {{-- campo Avanzada --}}
                    <div class="w-full rounded-lg bg-gray-500">
                        <div class="flex">
                        <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Avanzada</span>
                        <select class="w-full px-4 py-2 rounded-r-lg focus:outline-none border focus:ring-2 focus:ring-cyan-500" wire:model="avanzadaId" required>
                            <option value="">Seleccione</option>
                        </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="grid grid-cols-3 gap-4">
                <div class="flex items-center justify-center pb-4"> {{-- campo estado --}}
                    <div class="w-full rounded-lg bg-gray-500">
                    <div class="flex">
                        <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Estado</span>
                        <select class="w-full px-4 py-2 border rounded-r-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" wire:model.live="estadoId" required>
                            <option value="">Seleccione</option>
                        </select>
                    </div>
                    </div>
                </div>

                 {{-- campo municipio --}}
                    <div class="flex items-center justify-center pb-4"> {{-- campo estado --}}
                        <div class="w-full rounded-lg bg-gray-500">
                        <div class="flex">
                            <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Municipio</span>
                            <select class="w-full px-4 py-2 border rounded-r-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" wire:model.live="municipioId" required>
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                        </div>
                    </div>

                 {{-- campo Parroquia --}}
                    <div class="flex items-center justify-center pb-4"> {{-- campo estado --}}
                        <div class="w-full rounded-lg bg-gray-500">
                        <div class="flex">
                            <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Parroquia</span>
                            <select class="w-full px-4 py-2 border rounded-r-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" wire:model="parroquiaId" required>
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                        </div>
                    </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="relative flex flex-wrap items-stretch pb-4"> {{-- campo Nivel Academico --}}
                    <span class="flex bg-cyan-300 font-semibold text-white items-center whitespace-nowrap rounded-l-lg border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Nivel Académico</span>
                    <select wire:model="nivelAcademicoId" class="relative m-0 -ml-px block w-[1px] min-w-0 flex-auto rounded-r-lg border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary">
                        <option value="">Seleccione</option>
                    </select>
                    {{-- <input type="text" aria-label="Last name" class="relative m-0 -ml-px block w-[1px] min-w-0 flex-auto rounded-r-lg border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary" /> --}}
                </div>

                <div class="flex items-center justify-center pb-4"> {{-- campo Responsabilidad --}}
                    <div class="w-full rounded-lg bg-gray-500">
                        <div class="flex">
                        <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Responsabilidad</span>
                        <select class="w-full px-4 py-2 border rounded-r-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" wire:model="responsabilidadId" required>
                            <option value="">Seleccione</option>
                        </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center pb-4"> {{-- campo Correo --}}
                <div class="w-full rounded-lg bg-gray-500">
                    <div class="flex">
                    <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Correo</span>
                    <input wire:model="correo" type="email" class="w-full bg-white pl-2 text-base border rounded-r-lg font-semibold outline-0 border-slate-200" placeholder="usuario@correo.com" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>