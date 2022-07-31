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
                                {{-- <th class="bg-transparent border-bottom-0">% 24h</th>
                                <th class="bg-transparent border-bottom-0">Market Cap</th>
                                <th class="bg-transparent border-bottom-0">Circulating Supply</th>
                                <th class="bg-transparent border-bottom-0">Volume 24H</th>
                                <th class="bg-transparent border-bottom-0">CMGR/Month</th>
                                <th class="bg-transparent border-bottom-0 w-5">Inflation</th> --}}
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
                            {{-- <td>Bitcoin</td>
                            <td><img src="../assets/images/crypto-currencies/bitcoin.svg" alt="Bitcoin" class="w-4 h-4"></td>
                            <td>$10513.00</td>
                            <td class="text-red">-7%</td>
                            <td>$179,470,305,923</td>
                            <td>16,819,612 BTC</td>
                            <td class="ight">$9,578,830,000</td>
                            <td>8.11% / 57</td>
                            <td>0.36%</td> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 
