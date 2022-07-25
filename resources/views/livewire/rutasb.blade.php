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
                            <input type="text" class="form-control" wire:model="nom" >
                        </div>
                        <div class="form-group">
                            <label>hora salida:</label>
                            <div class="wd-150 mg-b-30">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                    </div>
                                    <!-- input-group-text -->
                                    <input class="form-control" id="tpBasic" placeholder="Set time" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>hora llegada:</label>
                            <div class="wd-150 mg-b-30">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                    </div>
                                    <!-- input-group-text -->
                                    <input class="form-control" id="tpBasic" placeholder="Set time" type="text">
                                </div>
                            </div>
                        </div>
                        
                        
                                <div class="form-group m-0">
                                    <div class="form-label">Checkboxes</div>
                                    <div class="custom-controls-stacked">
                                        @foreach ($p as $item)
                                        <label class="custom-control custom-checkbox">
                                           
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                            <span class="custom-control-label">{{$item->nom_parada}}</span>
                                           
                                                
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                       
                       
                        
                    <button class="btn btn-primary mt-4 mb-0" type="submit">Submit</button>
            </div>
        </div>
    </form>
    </div>
</div>