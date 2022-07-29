<div class="justify-content-center ">
    <div class="col-md-12 col-xl-6">
        <form wire:submit.prevent="guardar">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">registro de cooperativas</h4>
            </div>
            <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">nombre de cooperativas</label>
                            <input type="text" class="form-control" wire:model="nom_coop" >
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">numero celular:</label>
                            <input type="text" class="form-control" wire:model="ape" >
                        </div> --}}
                        <div class="form-group">
                            <div class="form-floating floating-label">
                                <div class="form-group">
                                    <label class="form-label">Dueño</label>
                                    <select class="form-control select2" data-placeholder="Choose one " wire:model="id_dueño">
                                        <option >select...</option>
                                        @foreach ($p as $item2)
                                       {{-- @if ($item2->id_tipo == 1) --}}
                                       <option value="{{$item2->id}}" >{{$item2->nom}}</option>
                                       {{-- @endif --}}
                                       @endforeach
                                        </select>
                                </div>                  
                            </div>
                        </div>
                    <button class="btn btn-primary mt-4 mb-0" type="submit">Submit</button>

            </div>
        </div>
    </form>
    </div>
</div>
 {{-- MODAL PARA PARADAS
 
    <div class="modal  fade" id="smallmodal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cooperativa</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
                </div>
                <div class="modal-body">
                    @foreach ($coop as $item)
                    <div class="custom-controls-stacked">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end" >{{$item->nom_coop}}</h6>
                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end" >{{$item->nom_coop}}</h6>
                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end" >{{$item->nom_coop}}</h6>
                    </div>
                    @endforeach
                  
                    <p>Modal body text goes here.</p>
                </div>
            </div>
        </div>
    </div> --}}