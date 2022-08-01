<div class="d-flex justify-content-center">
    <div class="col-md-12 col-xl-7">
        @if ($button)
        <form wire:submit.prevent="guardar"> 
        @else
        <form wire:submit.prevent="update"> 
        @endif
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Registrar las Paradas</h4>
            </div>
            <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Nombre de la Parada</label>
                            <input type="text" class="form-control" wire:model="nom_parada" >
                            @error('nom_parada')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>
                        @if ($button)
                        <div class="form-group m-0 justify-content-center">
                            <button class="btn btn-success bg-success-gradient mt-3" data-bs-toggle="modal" data-bs-target="#smallmodal" type="button">Registro de Paradas</button>
                        </div>
                        <button class="btn btn-primary mt-4 mb-0" type="submit">Registrar</button>
                        @else
                        <button class="btn btn-primary mt-4 mb-0" type="submit">Actualizar</button>
                        @endif
            </div>
        </div>
    </form>
    </div>

     {{-- MODAL PARA PARADAS --}}
 
     <div class="modal  fade" id="smallmodal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registro de Paradas </h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
                </div>
                <div class="modal-body">
                    <table id="data-table" class="table table-bordered text-nowrap mb-0">
                          <thead class="border-top">
                            <tr>
                                  <th class="bg-transparent border-bottom-0">Nombre de Parada</th>
                                   <th class="bg-transparent border-bottom-0"style="width: 5%;">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($p as $item)
                                <tr class="border-bottom"> 
                                <td>
                                    <div class="mt-0 mt-sm-2 d-block">
                                        <h6 class="mb-0 fs-14 fw-semibold"> {{$item->nom_parada}}</h6>
                                    </div>
                                </td>
                                 <td>
                                    <div class="g-2">
                                      <a class="btn text-primary btn-sm" data-bs-dismiss="modal" data-bs-original-title="Edit" wire:click="edit({{$item->id}})"><span class="fe fe-edit fs-14"></span></a>
                                       <a class="btn text-danger btn-sm"   data-bs-dismiss="modal" data-bs-original-title="Delete" wire:click="destroyL({{$item->id}})"><span class="fe fe-trash-2 fs-14"></span></a>
                                    </div>
                                    </td>
                                 </tr>
                                 @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div> 

</div>

