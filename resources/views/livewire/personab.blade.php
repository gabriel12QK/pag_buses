<div class="d-flex justify-content-center ">
    <div class="col-md-12 col-xl-7">
        @if ($button)
            <form wire:submit.prevent="guardar">
            @else
                <form wire:submit.prevent="update">
        @endif
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Registrar Personas </h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" wire:model="nom">
                    @error('nom')
                        <div class="alert alert-danger mb-0" role="alert">
                            <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                            <span class="alert-inner--text">{{ $message }} </span>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Apellido</label>
                    <input type="text" class="form-control" wire:model="ape">
                    @error('ape')
                        <div class="alert alert-danger mb-0" role="alert">
                            <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                            <span class="alert-inner--text">{{ $message }} </span>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Cedula</label>
                    <input type="text" class="form-control" wire:model="CI">
                    @error('CI')
                        <div class="alert alert-danger mb-0" role="alert">
                            <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                            <span class="alert-inner--text">{{ $message }} </span>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Celular</label>
                    <input type="text" class="form-control" wire:model="telf">
                    @error('telf')
                        <div class="alert alert-danger mb-0" role="alert">
                            <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                            <span class="alert-inner--text">{{ $message }} </span>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-floating floating-label">
                        <div class="form-group">
                            <label class="form-label">Tipo de Usuario</label>
                            <select class="form-control select2" data-placeholder="Choose one (with optgroup)"
                                wire:model="id_tipo">
                                <option>seleccionar...</option>
                                @foreach ($t as $item2)
                                    <option value="{{ $item2->id }}">{{ $item2->tipo }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @error('id_tipo')
                        <div class="alert alert-danger mb-0" role="alert">
                            <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                            <span class="alert-inner--text">{{ $message }} </span>
                        </div>
                    @enderror
                </div>

                @if ($button)
                    <div class="form-group m-0 justify-content-center">
                        <button class="btn btn-success bg-success-gradient mt-3" type="button" data-bs-toggle="modal"
                            data-bs-target="#largemodal">Registro de Personas</button>
                    </div>
                    <button class="btn btn-primary mt-4 mb-0" id="boton1" type="submit">Registrar</button>
                @else
                    <button class="btn btn-primary mt-4 mb-0" id="boton2" type="submit">Actualizar</button>
                @endif
            </div>
        </div>
        @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
            <span class="alert-inner--text"><strong>Success!</strong> {{ session('message') }} </span>
        </div>
       @endif
        </form>
    </div>


    {{-- MODAL PARA buses --}}

    <div class="modal fade" id="largemodal" tabindex="-1" role="dialog" wire:ignore.self>
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registro de Personas</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="data-table" class="table table-bordered text-nowrap mb-0">
                        <thead class="border-top">
                            <tr>
                                <th class="bg-transparent border-bottom-0">Nombres</th>
                                <th class="bg-transparent border-bottom-0">Cedula</th>
                                <th class="bg-transparent border-bottom-0">Celular</th>
                                <th class="bg-transparent border-bottom-0">Tipo</th>
                                <th class="bg-transparent border-bottom-0"style="width: 5%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($p as $item)
                                <tr class="border-bottom">
                                    <td>
                                        <div class="mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-0 fs-14 fw-semibold"> {{ $item->nom }} {{ $item->ape }}
                                            </h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-0 fs-14 fw-semibold"> {{ $item->CI }}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-0 fs-14 fw-semibold"> {{ $item->telf }}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-0 fs-14 fw-semibold"> {{ $item->tipo }}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="g-2">
                                            <a class="btn text-primary btn-sm" data-bs-dismiss="modal"
                                                data-bs-original-title="Edit"
                                                wire:click="edit({{ $item->id }})"><span
                                                    class="fe fe-edit fs-14"></span></a>
                                            <a class="btn text-danger btn-sm" data-bs-original-title="Delete"
                                                wire:click="destroyL({{ $item->id }})"><span
                                                    class="fe fe-trash-2 fs-14"></span></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            {{ $p->links() }}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
{{-- @include('plantilla.scrip')
<script>
    $("#boton1").click(function() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Se ha guardado con exito el registro',
            showConfirmButton: false,
            timer: 1500
        })
    })
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}


