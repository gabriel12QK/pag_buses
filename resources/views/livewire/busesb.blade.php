<div class="row">
    <div class="col-md-12 col-xl-12">
     
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Registrar Buses</h3>
            </div>
            <div class="card-body">
                <form  wire:submit.prevent="guardar">
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
                                           {{-- @if ($item2->id_tipo == 1) --}}
                                           <option value="{{$item->id}}" >{{$item->nom}}</option>
                                           {{-- @endif --}}
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
                        <button class="btn btn-primary mt-4 mb-0" >Enviar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
