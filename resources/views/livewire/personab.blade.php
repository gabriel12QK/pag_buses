<div class="justify-content-center ">
    <div class="col-md-12 col-xl-6">
        <form wire:submit.prevent="guardar">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tipos De Usuarios</h4>
            </div>
            <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">nombre</label>
                            <input type="text" class="form-control" wire:model="nom" >
                            @error('nom')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">apellido</label>
                            <input type="text" class="form-control" wire:model="ape" >
                            @error('ape')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">cedula</label>
                            <input type="text" class="form-control" wire:model="CI" >
                            @error('CI')
                            <div class="alert alert-danger mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text">{{ $message }} </span>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">celular</label>
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
                                        <option >select...</option>
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
                    <button class="btn btn-primary mt-4 mb-0" type="submit">Submit</button>
            </div>
        </div>
    </form>
    </div>
</div>