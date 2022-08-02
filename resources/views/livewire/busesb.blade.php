<div class="row">
    <div class="col-md-12 col-xl-12">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Formulario para buses</h4>
            </div>
            <div class="card-body">
                @if ($button)
                <form wire:submit.prevent="guardar"> 
                @else
                <form wire:submit.prevent="update"> 
                @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Matricula</label>
                                <input type="text" class="form-control" wire:model="matricula" >
                                @error('matricula')
                                <div class="alert alert-danger mb-0" role="alert">
                                    <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                    <span class="alert-inner--text">{{ $message }} </span>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Modelo</label>
                                <input type="text" class="form-control" wire:model="modelo" >
                                @error('modelo')
                                <div class="alert alert-danger mb-0" role="alert">
                                    <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                    <span class="alert-inner--text">{{ $message }} </span>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Capacidad</label>
                                <input type="text" class="form-control" wire:model="capacidad" >
                                @error('capacidad')
                                <div class="alert alert-danger mb-0" role="alert">
                                    <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                    <span class="alert-inner--text">{{ $message }} </span>
                                </div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">

                            {{-- select de chofer --}}

                            <div class="form-group">
                                <div class="form-floating floating-label">
                                    <div class="form-group">
                                        <label class="form-label">Chofer</label>
                                        <select class="form-control select2" data-placeholder="Choose one " wire:model="id_chofer">
                                            <option >seleccionar</option>
                                            @foreach ($chofer as $item)
                                           @if ($item->id_tipo == 2)
                                           <option value="{{$item->id}}" >{{$item->nom}}</option>
                                           @endif
                                           @endforeach
                                            </select>
                                    </div>
                                </div>
                                @error('id_chofer')
                                <div class="alert alert-danger mb-0" role="alert">
                                    <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                    <span class="alert-inner--text">{{ $message }} </span>
                                </div>
                                @enderror
                            </div>

                            {{-- select de cooperativa --}}

                            <div class="form-group">
                                <div class="form-floating floating-label">
                                    <div class="form-group">
                                        <label class="form-label">Cooperativa</label>
                                        <select class="form-control select2" data-placeholder="Choose one " wire:model="id_coop">
                                            <option >seleccionar.</option>
                                            @foreach ($coop as $item2)
                                           {{-- @if ($item2->id_tipo == 1) --}}
                                           <option value="{{$item2->id}}" >{{$item2->nom_coop}}</option>
                                           {{-- @endif --}}
                                           @endforeach
                                            </select>
                                    </div>
                                </div>
                                @error('id_coop')
                                <div class="alert alert-danger mb-0" role="alert">
                                    <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                    <span class="alert-inner--text">{{ $message }} </span>
                                </div>
                                @enderror
                            </div>

                            {{-- select ruta --}}

                            <div class="form-group">
                                <div class="form-floating floating-label">
                                    <div class="form-group">
                                        <label class="form-label">Ruta</label>
                                        <select class="form-control select2" data-placeholder="Choose one " wire:model="id_ruta">
                                            <option >seleccionar...</option>
                                            @foreach ($ruta as $item3)
                                           {{-- @if ($item2->id_tipo == 1) --}}
                                           <option value="{{$item3->id}}" >{{$item3->nom_ruta}}</option>
                                           {{-- @endif --}}
                                           @endforeach
                                            </select>
                                    </div>
                                </div>
                                @error('id_ruta')
                                <div class="alert alert-danger mb-0" role="alert">
                                    <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                    <span class="alert-inner--text">{{ $message }} </span>
                                </div>
                                @enderror
                            </div>
                        </div>
 
                        @if ($button)
                        <div class="form-group m-0 justify-content-center">
                            <button class="btn btn-success bg-success-gradient mt-3" type="button" data-bs-toggle="modal" data-bs-target="#largemodal">Buses Registrados</button>
                        </div>
                        <button class="btn btn-primary mt-4 mb-0" id="boton1" type="submit">Registrar</button>
                        @else
                        <button class="btn btn-primary mt-4 mb-0" type="submit">Actualizar</button>
                        @endif
                    </div>
                    @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
                        <span class="alert-inner--text"><strong>Success!</strong> {{ session('message') }} </span>
                    </div>
                   @endif
                    </form>
                </div>
            </div>
        </div>

            {{-- MODAL PARA buses--}}

            <div class="modal fade" id="largemodal" tabindex="-1" role="dialog" wire:ignore.self>
                <div class="modal-dialog modal-lg " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Buses Registrados</h5>
                            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <table id="data-table" class="table table-bordered text-nowrap mb-0">
                                <thead class="border-top">
                                  <tr>
                                        <th class="bg-transparent border-bottom-0">Matricula</th>
                                        <th class="bg-transparent border-bottom-0">Modelo</th>
                                        <th class="bg-transparent border-bottom-0">Capacidad</th>
                                        <th class="bg-transparent border-bottom-0">Cooperativa</th>
                                        <th class="bg-transparent border-bottom-0">Conductor</th>
                                        <th class="bg-transparent border-bottom-0">Ruta</th>
                                         <th class="bg-transparent border-bottom-0"style="width: 5%;">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($bus as $item)
                                      <tr class="border-bottom">
                                      <td>
                                          <div class="mt-0 mt-sm-2 d-block">
                                              <h6 class="mb-0 fs-14 fw-semibold"> {{$item->matricula}}</h6>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mt-0 mt-sm-2 d-block">
                                              <h6 class="mb-0 fs-14 fw-semibold"> {{$item->modelo}}</h6>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mt-0 mt-sm-2 d-block">
                                              <h6 class="mb-0 fs-14 fw-semibold"> {{$item->capacidad}}</h6>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mt-0 mt-sm-2 d-block">
                                              <h6 class="mb-0 fs-14 fw-semibold"> {{$item->coop}}</h6>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mt-0 mt-sm-2 d-block">
                                              <h6 class="mb-0 fs-14 fw-semibold"> {{$item->nom}}</h6>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mt-0 mt-sm-2 d-block">
                                              <h6 class="mb-0 fs-14 fw-semibold"> {{$item->ruta}}</h6>
                                          </div>
                                      </td>
                                       <td>
                                          <div class="g-2">
                                            <a class="btn text-primary btn-sm" data-bs-dismiss="modal" data-bs-original-title="Edit" wire:click="edit({{$item->id}})"><span class="fe fe-edit fs-14"></span></a>
                                             <a class="btn text-danger btn-sm"    data-bs-original-title="Delete" wire:click="destroyL({{$item->id}})"><span class="fe fe-trash-2 fs-14"></span></a>
                                          </div>
                                          </td>
                                       </tr>
                                       @endforeach
                                       {{$bus->links() }}
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
{{-- --}}