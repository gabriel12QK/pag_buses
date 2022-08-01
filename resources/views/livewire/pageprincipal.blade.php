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
                    {{-- <div class="main-header-center ms-2git d-none d-lg-block">
                        <input type="text" class="form-control " id="typehead" placeholder="esatcion a consultar" wire:model="parada">
                        <a href="{{url('estaciones'.$parada)}}"> <button class="btn ripple btn-min w-lg mb-2 me-1 btn-primary" ><i class="fe fe-search" aria-hidden="true" ></i></button></a>
                    </div> --}}
                   
                </div>
                <div class="col-xl-6 col-lg-6 my-auto">
                    <img src="assets/images/media/termianlbus.gif" alt="">
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 mb-5 pb-5 animation-zidex pos-relative">
                <h3 class="fw-semibold mt-7">Busqueda Personalizada</h3>
                    @if ($button)
                    <button class="btn ripple btn-min w-lg mb-2 me-1 btn-primary" wire:click="cambio">Buscar por ruta</button>
                    <div class="form-group">
                        <h4 class="fw-semibold mt-7">Busqueda por Paradas</h4>
                        <div class="input-group">
                            <a href="{{url('estaciones'.$parada)}}"> <button class="btn btn-primary" type="button" aria-placeholder="Estacion" id="button-addon1"><i class="fe fe-search" aria-hidden="true" ></i></button></a>
                            <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" wire:model="parada">
                        </div>
                    </div>
                    @else
                    <button class="btn ripple btn-min w-lg mb-2 me-1 btn-primary" wire:click="cambio">Buscar por paradas</button>
                    {{-- <div class="main-header-center ms-2git d-none d-lg-block">
                        <input type="text" class="form-control " id="typehead" placeholder="Ruta a consultar" wire:model="ruta">
                        <a href="{{url('ruta-paradas'.$ruta)}}"> <button class="btn ripple btn-min w-lg mb-2 me-1 btn-primary" ><i class="fe fe-search" aria-hidden="true" ></i></button></a>
                    </div>  --}}
                    <div class="form-group">
                        <h4 class="fw-semibold mt-7">Busqueda por Rutas</h4>
                        <div class="input-group">
                            <a href="{{url('ruta-paradas'.$ruta)}}"> <button class="btn btn-primary" type="button" id="button-addon1"><i class="fe fe-search" aria-hidden="true" ></i></button></a>
                            <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" placeholder="Ruta" aria-describedby="button-addon1" wire:model="ruta">
                        </div>
                    </div>
                    @endif
            {{-- <div class="main-header-center ms-2git d-none d-lg-block">
                <input type="text" class="form-control " id="typehead" placeholder="esatcion a consultar" wire:model="parada">
                <a href="{{url('estaciones'.$parada)}}"> <button class="btn ripple btn-min w-lg mb-2 me-1 btn-primary" ><i class="fe fe-search" aria-hidden="true" ></i></button></a>
            </div> --}}
           
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
                        {{-- <input type="text" wire:model="ruta">
                        <a href="{{url('ruta-paradas'.$ruta)}}"> prueba</a> --}}
                        <p class="card-text">Lugar de salida: <br> {{$item->salida}}</p>
                        <p class="card-text">Lugar de llegada: <br> {{$item->llegada}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            
           
        </div>


<!-- JQUERY JS -->
<script src="/assets/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- COUNTERS JS-->
<script src="/assets/plugins/counters/counterup.min.js"></script>
<script src="/assets/plugins/counters/waypoints.min.js"></script>
<script src="/assets/plugins/counters/counters-1.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="/assets/plugins/owl-carousel/owl.carousel.js"></script>
<script src="/assets/plugins/company-slider/slider.js"></script>

<!-- Star Rating Js-->
<script src="/assets/plugins/rating/jquery-rate-picker.js"></script>
<script src="/assets/plugins/rating/rating-picker.js"></script>

<!-- Star Rating-1 Js-->
<script src="/assets/plugins/ratings-2/jquery.star-rating.js"></script>
<script src="/assets/plugins/ratings-2/star-rating.js"></script>


</div>