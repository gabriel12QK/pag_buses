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
                            class="side-menu__label">Pagina Principal</span><span class="badge bg-green br-5 side-badge blink-text pb-1">UF</span></a>
                </li>
                <li class="sub-category">
                    <h3>Sistema de Gestion</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-layers"></i><span
                            class="side-menu__label">Registros<span class="badge bg-red br-5 side-badge blink-text pb-1">DEV</span></span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                       
                        <li><a href="{{url('tipo_usuario')}}" class="slide-item"> Tipo<span class="badge bg-red br-5 side-badge blink-text pb-1">DEV</span> </a></li>
                        <li><a href="{{url('persona')}}" class="slide-item"> Usuario<span class="badge bg-red br-5 side-badge blink-text pb-1">DEV</span></a></li>
                        <li><a href="{{url('cooperativa')}}" class="slide-item"> Cooperativa<span class="badge bg-red br-5 side-badge blink-text pb-1">DEV</span></a></li>
                        <li><a href="{{url('paradas')}}" class="slide-item"> Paradas<span class="badge bg-red br-5 side-badge blink-text pb-1">DEV</span></a></li>
                        <li><a href="{{url('rutas')}}" class="slide-item"> Rutas<span class="badge bg-red br-5 side-badge blink-text pb-1">DEV</span></a></li>
                        <li><a href="{{url('buses')}}" class="slide-item"> Buses<span class="badge bg-red br-5 side-badge blink-text pb-1">DEV</span></a></li>
                        <li><a href="{{url('Reg-horario')}}" class="slide-item"> Horario<span class="badge bg-red br-5 side-badge blink-text pb-1">DEV</span></a></li>
                    </ul>
                </li>
                
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
    
</div>