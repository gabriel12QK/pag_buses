<div class="justify-content-center ">
    <div class="col-md-12 col-xl-6">
        <form wire:submit.prevent="guardar">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tipos De Usuarios</h4>
            </div>
            <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Ingrese el tipo de Usuario</label>
                            <input type="text" class="form-control" wire:model="tipo" >
                        </div>
                      
                    <button class="btn btn-primary mt-4 mb-0" type="submit">Submit</button>
            </div>
        </div>
    </form>
    </div>
</div>
