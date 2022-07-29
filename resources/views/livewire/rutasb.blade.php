<div class="justify-content-center ">
    <div class="col-md-12 col-xl-6">
        <form wire:submit.prevent="guardar">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tipos De Usuarios</h4>
            </div>
            <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">nombre de ruta</label>
                            <input type="text" class="form-control" wire:model="nom_ruta" >
                        </div>
                        
                        {{-- <div class="form-group">
                            <label class="form-label">Users list</label>
                            <select class="form-control select2" wire:model="paradas" multiple>
                                    @foreach ($p as $item)
                                        <option value="{{$item->nom_parada}}">{{$item->nom_parada}}</option>
                                    @endforeach
                                </select>
                            </div> --}}

                        <div class="form-group">
                            <label>hora salida:</label>
                            <div class="wd-150 mg-b-30">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                    </div>
                                    <!-- input-group-text -->
                                    <input class="form-control" id="tpBasic" value ="<?php date("H:i:s"); ?>"  placeholder="00:00am" type="text" wire:model="inicio">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>hora finalizacion:</label>
                            <div class="wd-150 mg-b-30">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                    </div>
                                    <!-- input-group-text -->
                                    <input class="form-control" id="tpBasic" value ="<?php date("H:i:s"); ?>" placeholder="00:00am" type="text" wire:model="fin">
                                </div>
                            </div>
                        </div>
                        
                        
                                {{-- <div class="form-group m-0 justify-content-center">
                                    <button class="btn btn-primary bg-primary-gradient mt-3" data-bs-toggle="modal" data-bs-target="#smallmodal" type="button">Small Modal</button>
                                </div> --}}
                       
                       
                        
                    <button class="btn btn-primary mt-4 mb-0" type="submit">Submit</button>
            </div>
        </div>
    </form>
    </div>

    {{-- MODAL PARA PARADAS --}}
{{-- 
    <div class="modal  fade" id="smallmodal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Paradas</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
                </div>
                <div class="modal-body">
                    <div class="custom-controls-stacked">
                        @foreach ($p as $item)
                        <label class="custom-control custom-checkbox">
                           
                            <input type="checkbox" class="custom-control-input" >
                            <span class="custom-control-label" wire:model="paradas" >{{$item->nom_parada}}</span>
                           
                                
                            </label>
                        @endforeach
                       
                    </div>
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> --}}
</div>
