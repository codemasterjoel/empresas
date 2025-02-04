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
                        {{-- <button type="button" class="btn bg-gradient-primary btn-sm mb-0 font-weight-bolder" data-bs-toggle="modal" data-bs-target="#exampleModal">+&nbsp; NUEVA EMPRESA</button> --}}
                        <a href="/empresa/0" wire:navigate class="btn bg-gradient-primary btn-sm mb-0 font-bold">+&nbsp; NUEVA EMPRESA</a>
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
                                        <th class="text-center text-uppercase text-dark font-weight-bolder">propietario</th>
                                        <th class="text-center text-uppercase text-dark font-weight-bolder">empresa</th>
                                        <th class="text-center text-uppercase text-dark font-weight-bolder">parroquia</th>
                                        <th class="text-center text-uppercase text-dark font-weight-bolder">tipo</th>
                                        <th class="text-center text-uppercase text-dark font-weight-bolder">acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $indice =0; ?>
                                    @foreach ($empresas as $empresa)
                                    <?php $indice += 1; ?>
                                    <tr class="w-[800]">
                                        <td class="ps-4"><p class="font-weight-bold text-dark mb-0"><?php echo $indice; ?></p></td>
                                        <td class="text-center text-uppercase"><p class="text-dark font-weight-bold mb-0">{{$empresa->cedula}}</p></td>
                                        <td class="text-center text-uppercase"><p class="text-dark font-weight-bold mb-0">{{isset($empresa->nombres) ? $empresa->nombres : ''}} {{isset($empresa->apellido) ? $empresa->apellido : ''}}</p></td>
                                        <td class="text-center text-uppercase"><p class="text-dark font-weight-bold mb-0">{{$empresa->nombre}}</p></td>
                                        <td class="text-center text-uppercase"><p class="text-dark font-weight-bold mb-0">{{isset($empresa->parroquia->nombre) ? $empresa->parroquia->nombre : ''}}</p></td>
                                        <td class="text-center text-uppercase"><p class="text-dark font-weight-bold mb-0 {{$empresa->sucursal > 0 ? 'text-white bg-cyan-500' : 'text-white bg-green-500'}} rounded-lg">{{$empresa->sucursal > 0 ? 'SUCURSAL' : 'PRINCIPAL'}}</p></td>
                                        <td class="text-center">
                                            <a href="{{route('empresa.editar', [$empresa->id])}}" class=" text-success px-2 py-1 mb-0" type="button"><span class="material-symbols-outlined">person_edit</span></a>
                                            <a href="" wire:click="borrar('{{$empresa->id}}')" class="text-danger font-bold py-2 px-2"><span class="material-symbols-outlined">person_cancel</span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{$empresas->links()}}
                    </div>
                @else
                    <div class="card-dody px-4 pt-2 py-8 pb-2">
                        <strong class="px-4 mt-8 font-bold">No existen Resultados</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
