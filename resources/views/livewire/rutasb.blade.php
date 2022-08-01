<div class="d-flex justify-content-center">
    <div class="col-md-12 col-xl-7">
        @if ($button)
        <form wire:submit.prevent="guardar"> 
        @else
        <form wire:submit.prevent="update"> 
        @endif
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Registrar las Rutas Disponibles</h4>
            </div>
            <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Nombre de la ruta</label>
                            <input type="text" class="form-control" wire:model="nom_ruta" >
                            @error('nom_ruta')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Lugar de salida</label>
                            <input type="text" class="form-control" wire:model="salida" >
                            @error('salida')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Lugar de llegada</label>
                            <input type="text" class="form-control" wire:model="llegada" >
                            @error('llegada')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Hora de inicio</label>
                            <div class="wd-150 mg-b-30">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                    </div>
                                    <!-- input-group-text -->
                                    <input class="form-control" id="tpBasic" value ="<?php date("H:i:s"); ?>"  placeholder="00:00am" type="text" wire:model="inicio">
                                </div>
                            </div>
                            @error('inicio')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Hora de finalización</label>
                            <div class="wd-150 mg-b-30">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                    </div>
                                    <!-- input-group-text -->
                                    <input class="form-control" id="tpBasic" value ="<?php date("H:i:s"); ?>" placeholder="00:00am" type="text" wire:model="fin">
                                </div>
                            </div>
                            @error('fin')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>

                        @if ($button)
                        <div class="form-group m-0 justify-content-center">
                            <button class="btn btn-success bg-success-gradient mt-3" type="button" data-bs-toggle="modal" data-bs-target="#largemodal">Registro de Rutas</button>
                        </div>
                        <button class="btn btn-primary mt-4 mb-0" type="submit">Registrar</button>
                        @else
                        <button class="btn btn-primary mt-4 mb-0" type="submit">Actualizar</button>
                        @endif
            </div>
        </div>
    </form>
    </div>

      {{-- MODAL PARA rutas--}}

      <div class="modal fade" id="largemodal" tabindex="-1" role="dialog" wire:ignore.self>
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registro de Rutas</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                </div>
                <div class="modal-body">
                    <table id="data-table" class="table table-bordered text-nowrap mb-0">
                        <thead class="border-top">
                          <tr>
                                <th class="bg-transparent border-bottom-0">Ruta</th>
                                <th class="bg-transparent border-bottom-0">Salida</th>
                                <th class="bg-transparent border-bottom-0">Destino</th>
                                <th class="bg-transparent border-bottom-0">Hora-Inicio</th>
                                <th class="bg-transparent border-bottom-0">Hora-fin</th>
                                 <th class="bg-transparent border-bottom-0"style="width: 5%;">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($ruta as $item)
                              <tr class="border-bottom">
                              <td>
                                  <div class="mt-0 mt-sm-2 d-block">
                                      <h6 class="mb-0 fs-14 fw-semibold"> {{$item->nom_ruta}}</h6>
                                  </div>
                              </td>
                              <td>
                                  <div class="mt-0 mt-sm-2 d-block">
                                      <h6 class="mb-0 fs-14 fw-semibold"> {{$item->salida}}</h6>
                                  </div>
                              </td>
                              <td>
                                  <div class="mt-0 mt-sm-2 d-block">
                                      <h6 class="mb-0 fs-14 fw-semibold"> {{$item->llegada}}</h6>
                                  </div>
                              </td>
                              <td>
                                  <div class="mt-0 mt-sm-2 d-block">
                                      <h6 class="mb-0 fs-14 fw-semibold"> {{$item->inicio}}</h6>
                                  </div>
                              </td>
                              <td>
                                  <div class="mt-0 mt-sm-2 d-block">
                                      <h6 class="mb-0 fs-14 fw-semibold"> {{$item->fin}}</h6>
                                  </div>
                              </td>
                               <td>
                                  <div class="g-2">
                                    <a class="btn text-primary btn-sm" data-bs-dismiss="modal" data-bs-original-title="Edit" wire:click="edit({{$item->id}})"><span class="fe fe-edit fs-14"></span></a>
                                     <a class="btn text-danger btn-sm" data-bs-original-title="Delete" wire:click="destroyL({{$item->id}})"><span class="fe fe-trash-2 fs-14"></span></a>
                                  </div>
                                  </td>
                               </tr>
                               @endforeach
                               {{$ruta->links()}}
                          </tbody>
                      </table> 
                </div>
            </div>
        </div>
    </div>

</div>
