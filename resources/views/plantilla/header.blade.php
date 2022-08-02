<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="index.html">
                <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
            {{-- <div class="main-header-center ms-3 d-none d-lg-block">
                <input type="text" class="form-control" id="typehead" placeholder="Search for results...">
                <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
            </div> --}}
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                
                             <!-- Theme-Layout -->
                            <div class="d-flex country">
                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                    <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                    <span class="light-layout"><i class="fe fe-sun"></i></span>
                                </a>
                            </div>
                            <!-- Theme-Layout -->

                           <!-- FULL-SCREEN -->
                            <div class="dropdown d-flex">
                                <a class="nav-link icon full-screen-link nav-link-bg">
                                    <i class="fe fe-minimize fullscreen-button"></i>
                                </a>
                            </div>
                            <!-- FULL-SCREEN -->


                            

                            <!-- MESSAGE-BOX -->

                            <div class="dropdown d-flex profile-1 ">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                    <img src="/assets/images/users/21.jpg" alt="profile-user"
                                        class="avatar profile-user brround cover-image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading">
                                        <div class="text-center">
                                            <h5 class="text-dark mb-0 fs-14 fw-semibold">Usuario</h5>
                                            <small class="text-muted">Admin</small>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>

                                    {{-- <a class="dropdown-item" href="login.html">
                                        <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                    </a> --}}
                                    <div class="dropdown-item">
                                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                          <i class="fa-solid fa-arrow-right-from-bracket px-2"></i>
                                          <span>Salir</span>
                                        </a>
                                        <form action="{{route('logout')}}" method="POST" id="logout-form">
                                          @csrf
                                        </form>
                                    </div>
                         </div>
                        
                 </div>
             </div>
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

