<div class="d-flex justify-content-center">
    <div class="col-md-12 col-xl-7">
        @if ($button)
        <form wire:submit.prevent="guardar"> 
        @else
        <form wire:submit.prevent="update"> 
        @endif
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Registro de cooperativas</h4>
            </div>
            <div class="card-body">
                @if (session()->has('message'))
                <div class="alert alert-success" role="alert">
                    <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
                    <span class="alert-inner--text"><strong>Success!</strong> {{ session('message') }} </span>
                </div>
               @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Nombre de la Cooperativa</label>
                            <input type="text" class="form-control" wire:model="nom_coop" >
                            @error('nom_coop')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-floating floating-label">
                                <div class="form-group">
                                    <label class="form-label">Dueño</label>
                                    <select class="form-control select2" data-placeholder="Choose one " wire:model="id_dueño">
                                        <option >seleccionar...</option>
                                        @foreach ($p as $item2)
                                       <option value="{{$item2->id}}" >{{$item2->nom}}</option>
                                       @endforeach
                                        </select>
                                </div>                  
                            </div>
                            @error('id_dueño')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>

                        @if ($button)
                        <div class="form-group m-0 justify-content-center">
                            <button class="btn btn-success bg-success-gradient mt-3" type="button" data-bs-toggle="modal" data-bs-target="#largemodal">Registro de Cooperativas</button>
                        </div>
                        <button class="btn btn-primary mt-4 mb-0" id="boton1" type="submit">Registrar</button>
                        @else
                        <button class="btn btn-primary mt-4 mb-0" type="submit">Actualizar</button>
                        @endif

            </div>
        </div>
    </form>
    </div>


    
     {{-- MODAL PARA Cooperativas --}}
 
     <div class="modal fade" id="largemodal" tabindex="-1" role="dialog" wire:ignore.self>
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registro de Cooperativas</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" wire:model="cedula">
                        <table id="data-table" class="table table-bordered text-nowrap mb-0">
                              <thead class="border-top">
                                <tr>
                                      <th class="bg-transparent border-bottom-0">Cooperativa</th>
                                      <th class="bg-transparent border-bottom-0">Buses</th>
                                      <th class="bg-transparent border-bottom-0">Dueño</th>
                                      <th class="bg-transparent border-bottom-0">Cedula</th>
                                       <th class="bg-transparent border-bottom-0"style="width: 5%;">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coop as $item)
                                    <tr class="border-bottom"> 
                                    <td>
                                        <div class="mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-0 fs-13 fw-semibold"> {{$item->nom_coop}}</h6>
                                        </div>
                                    </td>
                                    <td>
                                    {{--    --}}
                                        @foreach ($b as $item2)
                                        @if ($item2->nom_coop == $item->nom_coop )
                                            <div class="mt-0 mt-sm-2 d-block">
                                              <h6 class="mb-0 fs-13 fw-semibold"> {{$item2->cant}}</h6>
                                            </div>
                                
                                        @endif
                                            <div class="mt-0 mt-sm-2 d-block">
                                                <h6 class="mb-0 fs-13 fw-semibold"> </h6>
                                                </div>
                                         @endforeach
                                     </td> 
                                    <td>
                                        <div class="mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-0 fs-13. fw-semibold"> {{$item->nom}} </h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-0 fs-13. fw-semibold"> {{$item->CI}} </h6>
                                        </div>
                                    </td>
                                     <td>
                                        <div class="g-2">
                                          <a class="btn text-primary btn-sm" data-bs-dismiss="modal"  wire:click="edit({{$item->id}})"><i class="fe fe-edit fs-13"></i></a>
                                           <a class="btn text-danger btn-sm"    wire:click="destroyL({{$item->id}})"><i class="fe fe-trash-2 fs-13"></i></a>
                                        </div>
                                        </td>
                                     </tr>
                                     @endforeach
                                     {{ $coop->links() }}
                                </tbody>
                            </table>
                    </div>
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
 