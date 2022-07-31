<div>
<div class="col col-login mx-auto mt-7">
    <div class="text-center">
        <a href="index.html"><img src="../assets/images/brand/logo-white.png" class="header-brand-img" alt=""></a>
    </div>
</div>
<div class="container-login100">
    <div class="wrap-login100 p-6">
        <form class="login100-form validate-form">
            <span class="login100-form-title pb-5">
                Inicio de sesion
            </span>
            <div class="panel panel-primary">
                {{-- <div class="tab-menu-heading">
                    <div class="tabs-menu1">
                    
                        <ul class="nav panel-tabs">
                            <li class="mx-0"><a href="#tab5" class="active" data-bs-toggle="tab">Email</a></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="panel-body tabs-menu-body p-0 pt-5">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab5">
                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 form-control ms-0" type="email" placeholder="Correo electronico" wire:model="form.email">
                            </div>
                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 form-control ms-0" type="password" placeholder="Contraseña" wire:model="form.password">
                            </div>
                            <div class="container-login100-form-btn">
                                {{-- <a href="{{url('principal')}}" class="login100-form-btn btn-primary">
                                        Iniciar sesion
                                </a> --}}
                                <button class="login100-form-btn btn-primary" wire:click="ingreso"> iniciar sesion </button>
                            </div>
                            <div class="text-center pt-3">
                                <p class="text-dark mb-0">No eres miembro?<a href="{{url('registro')}}" class="text-primary ms-1">Registrate</a></p>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

