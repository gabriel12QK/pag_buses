@extends('layaouts.app')
@section('header-title')
Bienvenidos a la pagina de buses
@endsection
@section('contenido')

{{-- izquierda paradas --}}
<div class="row">
    <div class="col-md-6">
       
        <div class="container">
            <ul class="notification">
                @foreach ($p as $item)
                <li>
                    <div class="notification-icon">
                        <a href="javascript:void(0);"></a>
                    </div>
                    <div class="notification-body">
                        <div class="media mt-0">
                            <div class="media-body ms-3 d-flex">
                                <div class="">
                                    {{$item->nom_ruta}}
                                    <p class="fs-15 text-dark fw-bold mb-0">{{$item->nom_parada}}</p>                                    
                                </div>
        
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
                
        </div>

    </div>

    {{-- derecha horario --}}
  
    <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Horario</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Dias</th>
                                        <th>Inicio</th>
                                        <th>Fin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                     @foreach ($p as $item)
                                     @if ($loop->first)
                                     <tr>
                                        <td>Lunes</td>
                                        <td>{{$item->inicio}}</td>
                                        <td>{{$item->fin}}</td>
                                    </tr>    
                                    <tr>
                                        <td>Martes</td>
                                        <td>{{$item->inicio}}</td>
                                        <td>{{$item->fin}}</td>
                                    </tr>    
                                    <tr>
                                        <td>Miercoles</td>
                                        <td>{{$item->inicio}}</td>
                                        <td>{{$item->fin}}</td>
                                    </tr>    
                                    <tr>
                                        <td>Jueves</td>
                                        <td>{{$item->inicio}}</td>
                                        <td>{{$item->fin}}</td>
                                    </tr>    
                                    <tr>
                                        <td>Viernes</td>
                                        <td>{{$item->inicio}}</td>
                                        <td>{{$item->fin}}</td>
                                    </tr> 
                                    <tr>
                                        <td>Sabado</td>
                                        <td>{{$item->inicio}}</td>
                                        <td>{{$item->fin}}</td>
                                    </tr>       
                                    <tr>
                                        <td>Domingo</td>
                                        <td>{{$item->inicio}}</td>
                                        <td>{{$item->fin}}</td>
                                    </tr>    
                                     @endif
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </div>

</div>
@endsection
 
