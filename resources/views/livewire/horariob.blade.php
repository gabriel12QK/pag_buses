<div class="d-flex justify-content-center">
    <div class="col-md-12 col-xl-7">
        @if ($button)
        <form wire:submit.prevent="guardar"> 
        @else
        <form wire:submit.prevent="update"> 
        @endif
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Horaios de llegada</h4>
            </div>
            <div class="card-body">

                  {{-- select de buses --}}

                <div class="form-group">
                    <div class="form-floating floating-label">
                        <div class="form-group">
                            <label class="form-label">Bus</label>
                            <select class="form-control select2" data-placeholder="Choose one " wire:model="id_bus">
                                <option >seleccionar....</option>
                                @foreach ($bus as $item)
                               <option value="{{$item->id}}" >{{$item->matricula}}</option>
                               @endforeach
                                </select>
                        </div>                  
                    </div>
                    @error('id_bus')
                    <div class="alert alert-danger mb-0" role="alert">
                        <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                        <span class="alert-inner--text">{{ $message }} </span>
                    </div>
                    @enderror
                </div>

                {{-- select de ruta --}}

                <div class="form-group">
                    <div class="form-floating floating-label">
                        <div class="form-group">
                            <label class="form-label">Paradas</label>
                            <select class="form-control select2" data-placeholder="Choose one " wire:model="id_parada">
                                <option >seleccionar...</option>
                                @foreach ($p as $item2)
                               
                               <option value="{{$item2->id}}" >{{$item2->nom_parada}}</option>
                             
                               @endforeach
                                </select>
                        </div>                  
                    </div>
                    @error('id_parada')
                    <div class="alert alert-danger mb-0" role="alert">
                        <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                        <span class="alert-inner--text">{{ $message }} </span>
                    </div>
                    @enderror
                </div>

                        <div class="form-group">
                            <label>Hora de llegada</label>
                            <div class="wd-150 mg-b-30">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                    </div>
                                    <!-- input-group-text -->
                                    <input class="form-control" id="tpBasic" value ="<?php date("H:i:s"); ?>" placeholder="00:00am" type="text" wire:model="frecuencia">
                                </div>
                            </div>
                            @error('frecuencia')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>                   
                        @if ($button)
                        <div class="form-group m-0 justify-content-center">
                            <button class="btn btn-success bg-success-gradient mt-3" type="button" data-bs-toggle="modal" data-bs-target="#largemodal">Registro de Horarios</button>
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
                        <h5 class="modal-title">Registro de Horarios</h5>
                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <table id="data-table" class="table table-bordered text-nowrap mb-0">
                            <thead class="border-top">
                              <tr>
                                    <th class="bg-transparent border-bottom-0">Ruta</th>
                                    <th class="bg-transparent border-bottom-0">Parada</th>
                                    <th class="bg-transparent border-bottom-0">Hora_llegada</th>
                                    <th class="bg-transparent border-bottom-0">Destino</th>
                                     <th class="bg-transparent border-bottom-0"style="width: 5%;">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($h as $item)
                                  <tr class="border-bottom">
                                  <td>
                                      <div class="mt-0 mt-sm-2 d-block">
                                          <h6 class="mb-0 fs-14 fw-semibold"> {{$item->ruta}}</h6>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="mt-0 mt-sm-2 d-block">
                                          <h6 class="mb-0 fs-14 fw-semibold"> {{$item->parada}}</h6>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="mt-0 mt-sm-2 d-block">
                                          <h6 class="mb-0 fs-14 fw-semibold"> {{$item->frecuencia}}</h6>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="mt-0 mt-sm-2 d-block">
                                          <h6 class="mb-0 fs-14 fw-semibold"> {{$item->destino}}</h6>
                                      </div>
                                  </td>
                                   <td>
                                      <div class="g-2">
                                        <a class="btn text-primary btn-sm" data-bs-dismiss="modal" data-bs-original-title="Edit" wire:click="edit({{$item->id}})"><span class="fe fe-edit fs-14"></span></a>
                                         <a class="btn text-danger btn-sm"   data-bs-original-title="Delete" ><span class="fe fe-trash-2 fs-14"></span></a>
                                      </div>
                                      </td>
                                   </tr>
                                   @endforeach
                                   {{ $h->links() }}
                              </tbody>
                          </table> 
                    </div>
                </div>
            </div>
        </div>

</div>
