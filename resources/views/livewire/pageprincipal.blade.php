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
                    <div class="input-group mb-2" >
                        <input type="text" class="form-control " id="typehead" placeholder="esatcion a consultar" wire:model="parada">
                        <a href="{{url('estaciones'.$parada)}}"><span class="input-group-text btn btn-primary">Search</span></a>
                    </div>
                   
                </div>
                <div class="col-xl-6 col-lg-6 my-auto">
                    <img src="assets/images/media/termianlbus.gif" alt="">
                </div>
            </div>
        </div>





        <div class="row">
            <h5 class="fw-semibold mb-4">Rutas</h5>
            @foreach ($r as $item)
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <span class="ribbone-success-left">
                        <span><i class="fe fe-zap"></i></span>
                    </span>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end"  >{{$item->nom_ruta}}</h6>
                        <input type="text" wire:model="ruta">
                        <a href="{{url('ruta-paradas'.$ruta)}}"> prueba</a>
                        <p class="card-text">Lugar de salida: {{$item->salida}}</p>
                        <p class="card-text">Lugar de llegada: {{$item->llegada}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            
           
        </div>

      
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">KeyTable integration Autofill</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="key-table" class="table table-bordered text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Ruta</th>
                                      
                                        <th>Inicio</th>
                                        <th>Fin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($r as $item)
                                  <tr>
                                      <td>{{$item->nom_ruta}}</td>
                                      <td>{{$item->inicio}}</td>
                                      <td>{{$item->fin}}</td>
                                </tr>
                                  @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 --}}


</div>