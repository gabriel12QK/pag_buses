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
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">apellido</label>
                            <input type="text" class="form-control" wire:model="nom" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">cedula</label>
                            <input type="text" class="form-control" wire:model="nom" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">celular</label>
                            <input type="text" class="form-control" wire:model="nom" >
                        </div>
                        <div class="form-group">
                            <div class="form-floating floating-label">
                                <select class="form-control form-select select2" data-bs-placeholder="Select">
                                    <option >Tipo de Usuario</option>
                                    @foreach ($t as $item2)
                                   <option >{{$item2->tipo}}</option>
                                   @endforeach
                                </select>
                            
                            </div>
                        </div>
                    <button class="btn btn-primary mt-4 mb-0" type="submit">Submit</button>
            </div>
        </div>
    </form>
    </div>
</div>