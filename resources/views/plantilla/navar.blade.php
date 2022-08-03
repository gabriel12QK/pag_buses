<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{url('principal')}}">
                <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="../assets/images/brand/logo-1.png" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="../assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{url('dashboard')}}"><i
                            class="side-menu__icon fe fe-home"></i><span
                            class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="sub-category">
                    <h3>Usuario Final</h3>
                </li>

                <li>
                    <a class="side-menu__item has-link" href="{{url('principal')}}" ><i
                            class="side-menu__icon fe fe-zap"></i><span
                            class="side-menu__label">Pagina Principal</span></a>
                </li>
                <li class="sub-category">
                    <h3>Sistema de Gestion</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-layers"></i><span
                            class="side-menu__label">Registros</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                       
                        <li><a href="{{url('tipo_usuario')}}" class="slide-item"> Tipo </a></li>
                        <li><a href="{{url('persona')}}" class="slide-item"> Usuario</a></li>
                        <li><a href="{{url('cooperativa')}}" class="slide-item"> Cooperativa</a></li>
                        <li><a href="{{url('paradas')}}" class="slide-item"> Paradas</a></li>
                        <li><a href="{{url('rutas')}}" class="slide-item"> Rutas</a></li>
                        <li><a href="{{url('buses')}}" class="slide-item"> Buses</a></li>
                        <li><a href="{{url('Reg-horario')}}" class="slide-item"> Horario</a></li>
                    </ul>
                </li>


                <li class="sub-category">
                    <h3>About</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fa fa-info"></i><span
                            class="side-menu__label">About</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                       
                        <li><a href="{{url('dev')}}" class="slide-item">Desarrolladores </a></li>
                        <li><a href="{{url('proyecto')}}" class="slide-item">Proyecto</a></li>
                        <li><a href="{{url('info')}}" class="slide-item">Info</a></li>
                    </ul>
                </li>
                
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
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