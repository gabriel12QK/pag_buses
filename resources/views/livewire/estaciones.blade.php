@extends('layaouts.app')
@section('header-title')
Bienvenidos a la pagina de buses
@endsection
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Crypto Currencies</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="crypto-data-table" class="table table-bordered text-nowrap mb-0">
                        <thead class="border-top">
                            <tr>
                                <th class="bg-transparent border-bottom-0 w-5">Estado</th>
                                <th class="bg-transparent border-bottom-0 w-5">Estacion</th>
                                <th class="bg-transparent border-bottom-0">llegada</th>
                                <th class="bg-transparent border-bottom-0">Ruta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($p as $item)
                            <tr class="border-bottom">
                                <td><i class="fe fe-check-circle"></i></td>
                                <td>{{$item->nom_parada}}</td>
                                <td>{{$item->frecuencia}}</td>
                                <td>{{$item->nom_ruta}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 
