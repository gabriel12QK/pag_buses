<div>
<div class="col col-login mx-auto mt-7">
    <div class="text-center">
        <a href="index.html"><img src="../assets/images/brand/logo-white.png" class="header-brand-img m-0" alt=""></a>
    </div>
</div>
<div class="container-login100">
    <div class="wrap-login100 p-6">
        <form>
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
                {{-- <a href="{{url('principal')}}" class="login100-form-btn btn-primary">
                        Register
                    </a> --}}
                    <button class="login100-form-btn btn-primary" wire:click="guardar" > iniciar sesion </button>
            </div>
            <div class="text-center pt-3">
                <p class="text-dark mb-0">Ya tienes una cuenta?<a href="{{url('')}}"class="text-primary ms-1">Iniciar Sesion</a></p>
            </div>
        </form>
            </div>
    </div>
</div>