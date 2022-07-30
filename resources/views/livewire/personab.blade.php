<div class="d-flex justify-content-center ">
    <div class="col-md-12 col-xl-7">
        <form wire:submit.prevent="guardar">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Registrar personas </h4>
            </div>
            <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" wire:model="nom" >
                            @error('nom')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Apellido</label>
                            <input type="text" class="form-control" wire:model="ape" >
                            @error('ape')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Cedula</label>
                            <input type="text" class="form-control" wire:model="CI" >
                            @error('CI')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Celular</label>
                            <input type="text" class="form-control" wire:model="telf" >
                            @error('telf')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-floating floating-label">
                                <div class="form-group">
                                    <label class="form-label">Tipo de Usuario</label>
                                    <select class="form-control select2" data-placeholder="Choose one (with optgroup)" wire:model="id_tipo">
                                        <option >seleccionar...</option>
                                        @foreach ($t as $item2)
                                       <option value="{{$item2->id}}" >{{$item2->tipo}}</option>
                                       @endforeach
                                        </select>
                                </div>                  
                            </div>
                            @error('id_tipo')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>
                    <button class="btn btn-primary mt-4 mb-0" type="submit">Enviar</button>
            </div>
        </div>
    </form>
    </div>
</div>