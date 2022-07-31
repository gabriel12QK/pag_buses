<div class="d-flex justify-content-center">
    <div class="col-md-12 col-xl-7">
        <form wire:submit.prevent="guardar">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Horaios de llegada</h4>
            </div>
            <div class="card-body">

                  {{-- select de buses --}}

                <div class="form-group">
                    <div class="form-floating floating-label">
                        <div class="form-group">
                            <label class="form-label">Bus</label>
                            <select class="form-control select2" data-placeholder="Choose one " wire:model="id_bus">
                                <option >seleccionar....</option>
                                @foreach ($bus as $item)
                               <option value="{{$item->id}}" >{{$item->matricula}}</option>
                               @endforeach
                                </select>
                        </div>                  
                    </div>
                    @error('id_bus')
                    <div class="alert alert-danger mb-0" role="alert">
                        <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                        <span class="alert-inner--text">{{ $message }} </span>
                    </div>
                    @enderror
                </div>

                {{-- select de ruta --}}

                <div class="form-group">
                    <div class="form-floating floating-label">
                        <div class="form-group">
                            <label class="form-label">Paradas</label>
                            <select class="form-control select2" data-placeholder="Choose one " wire:model="id_parada">
                                <option >seleccionar...</option>
                                @foreach ($p as $item2)
                               
                               <option value="{{$item2->id}}" >{{$item2->nom_parada}}</option>
                             
                               @endforeach
                                </select>
                        </div>                  
                    </div>
                    @error('id_parada')
                    <div class="alert alert-danger mb-0" role="alert">
                        <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                        <span class="alert-inner--text">{{ $message }} </span>
                    </div>
                    @enderror
                </div>

                        <div class="form-group">
                            <label>Hora de llegada</label>
                            <div class="wd-150 mg-b-30">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                    </div>
                                    <!-- input-group-text -->
                                    <input class="form-control" id="tpBasic" value ="<?php date("H:i:s"); ?>" placeholder="00:00am" type="text" wire:model="frecuencia">
                                </div>
                            </div>
                            @error('frecuencia')
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
