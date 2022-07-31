<div class="d-flex justify-content-center">
    <div class="col-md-12 col-xl-7">
        <form wire:submit.prevent="guardar">
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
                      <button class="btn btn-primary mt-4 mb-0" type="submit">Enviar</button>
            </div>
        </div>
    </form>
    </div>
</div>

