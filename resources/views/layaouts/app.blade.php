<!doctype html>
<html lang="en" dir="ltr">


@include('plantilla.head')

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

   
           @include('plantilla.header')
  

           @include('plantilla.navar')
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    @include('plantilla.content')
                  
                      
                </div>
            </div>
            <!--app-content close-->

        </div>




        <!-- FOOTER -->
       @include('plantilla.footer')
        <!-- FOOTER END -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
@include('plantilla.scrip')

</body>

</html>