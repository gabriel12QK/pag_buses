<div>
        <div class="container px-sm-0">
            <div class="row">
                <div class="col-xl-6 col-lg-6 mb-5 pb-5 animation-zidex pos-relative">
                    <h4 class="fw-semibold mt-7">Sistema de Bus Urbano Calceta</h3>
                    <h1 class="text-start fw-bold">Busca la ruta que necesites
                        <br><span
                            class="text-primary animate-heading">SBUC</span></h1>
                    <h4 class="pb-3">
                    Bienvenid@ a la forma mas facil y rapida de consultar los horarios
                    y paradas de los buses urbanos de la cuidad de calceta
                    </h4>
                </div>
                <div class="col-xl-6 col-lg-6 my-auto">
                    <img src="assets/images/media/termianlbus.gif" alt="">
                </div>
            </div>
        </div>





        <div class="row">
            <div class="col-md-12  col-xl-6">
                <div class="card">
                    <div class="card-status bg-blue br-te-7 br-ts-7"></div>
                    <div class="card-header">
                        <h3 class="card-title">Buscar Por Parada <span class="text-warning"><i
                            class="fa fa-map-marker  text-warning"></i></span></h3>
                       
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="input-group">
                            <a href="{{url('estaciones'.$parada)}}"> <button class="btn btn-primary" type="button" id="button-addon2">Buscar Parada</button></a>
                                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" placeholder="Parada" aria-describedby="button-addon1" wire:model="parada">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COL END -->
            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-status bg-blue br-te-7 br-ts-7"></div>
                    <div class="card-header">
                        <h3 class="card-title">Buscar Por Ruta <span class="text-green"><i
                            class="fa fa-map  text-green"></i></span></h3>
                        
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="input-group">
                                <a href="{{url('ruta-paradas'.$ruta)}}"> <button class="btn btn-primary" type="button" id="button-addon1">Buscar Ruta </button></a>
                                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" placeholder="Ruta" aria-describedby="button-addon1" wire:model="ruta">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COL END -->
        </div>


        <div class="row">
            <h5 class="fw-semibold mb-4">Rutas</h5>
            @foreach ($r as $item)
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <span class="ribbone-success-left">
                        <span><i class="fa fa-bus"></i></span>
                    </span>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end"  >{{$item->nom_ruta}}</h6>
                        {{-- <input type="text" wire:model="ruta">
                        <a href="{{url('ruta-paradas'.$ruta)}}"> prueba</a> --}}
                        <h4>Lugar de salida <i class="fa fa-map-marker"></i></h4>
                        <h5>{{$item->salida}}</h5>
                        <h4>Lugar de llegada <i class="fa fa-map-pin"></i></h4>
                        <h5>{{$item->llegada}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
            
           
        </div>


</div>