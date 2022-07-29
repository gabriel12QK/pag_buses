<div class="row">
    <div class="col-md-12 col-xl-12">
     
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">fomulario buses</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Matricula</label>
                                <input type="text" class="form-control" wire:model="matricula" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Modelo</label>
                                <input type="text" class="form-control" wire:model="modelo" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Capacidad</label>
                                <input type="text" class="form-control" wire:model="capacidad" >
                            </div>
                            
                        </div>
                        <div class="col-md-6">

                            {{-- select de chofer --}}

                            <div class="form-group">
                                <div class="form-floating floating-label">
                                    <div class="form-group">
                                        <label class="form-label">Chofer</label>
                                        <select class="form-control select2" data-placeholder="Choose one " wire:model="id_chofer">
                                            <option >select...</option>
                                            @foreach ($chofer as $item)
                                           {{-- @if ($item2->id_tipo == 1) --}}
                                           <option value="{{$item->id}}" >{{$item->nom}}</option>
                                           {{-- @endif --}}
                                           @endforeach
                                            </select>
                                    </div>                  
                                </div>
                            </div>

                            {{-- select de cooperativa --}}

                            <div class="form-group">
                                <div class="form-floating floating-label">
                                    <div class="form-group">
                                        <label class="form-label">Cooperativa</label>
                                        <select class="form-control select2" data-placeholder="Choose one " wire:model="id_coop">
                                            <option >select...</option>
                                            @foreach ($coop as $item2)
                                           {{-- @if ($item2->id_tipo == 1) --}}
                                           <option value="{{$item2->id}}" >{{$item2->nom_coop}}</option>
                                           {{-- @endif --}}
                                           @endforeach
                                            </select>
                                    </div>                  
                                </div>
                            </div>

                            {{-- select ruta --}}

                            <div class="form-group">
                                <div class="form-floating floating-label">
                                    <div class="form-group">
                                        <label class="form-label">Ruta</label>
                                        <select class="form-control select2" data-placeholder="Choose one " wire:model="id_ruta">
                                            <option >select...</option>
                                            @foreach ($ruta as $item3)
                                           {{-- @if ($item2->id_tipo == 1) --}}
                                           <option value="{{$item3->id}}" >{{$item3->nom_ruta}}</option>
                                           {{-- @endif --}}
                                           @endforeach
                                            </select>
                                    </div>                  
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-4 mb-0" wire:click="guardar">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
