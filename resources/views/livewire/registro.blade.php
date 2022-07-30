<div>
    <!doctype html>
    <html lang="en" dir="ltr">
    
    <head>
    
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="/assets/images/brand/favicon.ico" />
    
        <!-- TITLE -->
        <title>Registro</title>
    
        <!-- BOOTSTRAP CSS -->
        <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    
        <!-- STYLE CSS -->
        <link href="../assets/css/style.css" rel="stylesheet" />
        <link href="../assets/css/dark-style.css" rel="stylesheet" />
        <link href="../assets/css/transparent-style.css" rel="stylesheet">
        <link href="../assets/css/skin-modes.css" rel="stylesheet" />
    
        <!--- FONT-ICONS CSS -->
        <link href="../assets/css/icons.css" rel="stylesheet" />
    
        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />
    
    </head>
    
    <body class="app sidebar-mini ltr login-img">
    
        <!-- BACKGROUND-IMAGE -->
        <div class="">
    
            <!-- GLOABAL LOADER -->
            <div id="global-loader">
                <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
            </div>
            <!-- /GLOABAL LOADER -->
    
            <!-- PAGE -->
            <div class="page">
                <div class="">
    
                    <!-- CONTAINER OPEN -->
                    <div class="col col-login mx-auto mt-7">
                        <div class="text-center">
                            <a href="index.html"><img src="../assets/images/brand/logo-white.png" class="header-brand-img m-0" alt=""></a>
                        </div>
                    </div>
                    <div class="container-login100">
                        <div class="wrap-login100 p-6">
                            <form class="login100-form validate-form" wire:submit.prevent="submit">
                                <span class="login100-form-title">
                                        Registrate
                                    </span>
                                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="mdi mdi-account" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 ms-0 form-control" type="name" wire:model="form.name" placeholder="Nombre de Usuario">
                                </div>
                                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 ms-0 form-control" type="email" wire:model="form.email" placeholder="Correo Electronico">
                                </div>
                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 ms-0 form-control" type="password" wire:model="form.password"placeholder="Contraseña">
                                </div>
                                <label class="custom-control custom-checkbox mt-4">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">Acepto los <a href="terms.html">terminos y condiciones</a></span>
                                    </label>
                                <div class="container-login100-form-btn">
                                    <input type="submit" value="Registro">



                                    <a href="{{url('principal')}}" class="login100-form-btn btn-primary">
                                            Register
                                        </a>
                                </div>
                                <div class="text-center pt-3">
                                    <p class="text-dark mb-0">Ya tienes una cuenta?<a href="{{url('')}}"class="text-primary ms-1">Iniciar Sesion</a></p>
                                </div>
                        
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!-- END PAGE -->
    
        </div>
        <!-- BACKGROUND-IMAGE CLOSED -->
    
        <!-- JQUERY JS -->
        <script src="../assets/js/jquery.min.js"></script>
    
        <!-- BOOTSTRAP JS -->
        <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    
        <!-- SHOW PASSWORD JS -->
        <script src="../assets/js/show-password.min.js"></script>
    
        <!-- Perfect SCROLLBAR JS-->
        <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    
        <!-- Color Theme js -->
        <script src="../assets/js/themeColors.js"></script>
    
        <!-- CUSTOM JS -->
        <script src="../assets/js/custom.js"></script>
    
    
    </body>
    
    </html>
</div>
