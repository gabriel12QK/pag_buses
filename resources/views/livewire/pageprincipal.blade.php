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

                    <a href="https://themeforest.net/item/sash-bootstrap-5-admin-dashboard-template/35183671"
                        target="_blank" class="btn ripple btn-min w-lg mb-3 me-2 btn-primary"><i
                            class="fe fe-play me-2"></i> Get Started
                    </a>
                    <a href="https://themeforest.net/user/spruko/portfolio"
                        class="btn ripple btn-min w-lg btn-outline-primary mb-3 me-2" target="_blank"><i
                            class="fe fe-eye me-2"></i>Discover More
                    </a>
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
                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
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