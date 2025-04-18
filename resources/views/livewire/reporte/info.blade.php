<div class="content" id="page-content-wrapper">
    <div class="container card bg-white">
      <div class="section">
        <h2 class="title text-center"></h2>
        <div class="team">
            <div class="row mx-20" style="align-content: center">
              <img src="{{asset('img/logoccs.png')}}" width="200" style="display: block; margin:auto">
            </div>
            <h2 class=" mt-4 text-4xl text-cyan-400 font-bold text-center">SISTEMA DE VERIFICACIÓN DE EMPRESAS RECICLADORAS</h2>
            <h3 class=" mt-4 text-2xl text-cyan-400 font-bold text-center">DATOS DE LA EMPRESA</h3>
            <div class="row"> {{-- campo nombre --}}
                <div class="col-xl-3 col-sm-12 mb-xl-0">
                    <div class="flex items-center justify-center pb-4"> {{-- campo codigo --}}
                        <div class="w-full rounded-lg">
                            <div class="flex">
                                <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">CÓDIGO</span>
                                <input wire:model="codigo" disabled type="text" class="w-full pl-3 border border-solid uppercase rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-sm-12 mb-xl-0">
                    <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                        <div class="w-full rounded-lg">
                            <div class="flex">
                                <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">EMPRESA</span>
                                <input wire:model="nombre" disabled type="text" class="w-full pl-3 border border-solid uppercase rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900"/>
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
            <table style="width: 100%">
                <tbody>
                    <tr><td style="text-align:justify; text-indent: 2em;">Nos complace informarle que esta empresa ha completado satisfactoriamente su registro en el sistema de empresas recicladoras.
                        La empresa ha presentado y cumplido con todos los requisitos necesarios, incluyendo:</td></tr>
                    <tr><td><ul>
                        <ol><b>1.</b> Entrega de toda la documentación legal requerida.</ol>
                        <ol><b>2.</b> Obtención y aprobación de los permisos correspondientes.</ol>
                        <ol><b>3. </b> Alineación con las normativas ambientales vigentes.</ol>
                    </ul></td></tr>
                    <tr><td>Además, la empresa ha efectuado el pago correspondiente al proceso de certificación, de acuerdo a lo establecido por la Fundación Para la Economía Circular y Las Energías Renovables
                        Agradecemos su atención a este comunicado y quedamos a su disposición para cualquier consulta o información adicional que pueda necesitar.</td></tr>
                    <tr class="text-center"><td>Atentamente,</td></tr>
                    <tr class="text-center"><td>Fundación Para la Economía Circular y Las Energías Renovables</td></tr>
                </tbody>
            </div>
        </div>
      </div>
    </div>
</div>