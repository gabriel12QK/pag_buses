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
                                <div class="form-floating">
                                   
                                    <input type="text" class="form-control" >
                                    <label for="floatingInput">matricula</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                   
                                    <input type="text" class="form-control" >
                                    <label for="floatingPassword">modelo</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                  
                                    <input type="text" class="form-control" >
                                    <label for="floatingPassword">capacidad</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-floating floating-label">
                                   
                                    <select class="form-control form-select select2" data-bs-placeholder="Select" >
                                       @foreach ($coop as $item)
                                       <option >{{$item->nom_coop}}</option>
                                       @endforeach
                                    </select>
                                    <label for="floatingPassword">cooperativa</label>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating floating-label">
                                    <select class="form-control form-select select2" data-bs-placeholder="Select">
                                       @foreach ($ruta as $item1)
                                       <option >{{$item->nom_ruta}}</option>
                                       @endforeach
                                    </select>
                                    <label for="floatingPassword">ruta</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating floating-label">
                                    <select class="form-control form-select select2" data-bs-placeholder="Select">
                                       @foreach ($chofer as $item2)
                                       <option >{{$item->nom}}</option>
                                       @endforeach
                                    </select>
                                    <label for="floatingPassword">conductor</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-4 mb-0" wire:click="guardar">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
