<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\parada;
//query builder
use Illuminate\Support\Facades\DB;
class Pageprincipal extends Component
{
    public $ruta,$parada;
    public $button=true;
    public function render()
    {
        
        $r=DB::table('rutas')
        ->where('rutas.estado',1)
        ->get();
        return view('livewire.pageprincipal', compact('r'));
    }

    public function rutas($ruta)
    {
       
        $p=DB::table('rutas')
        ->join('buses','rutas.id','=','buses.id_ruta')
        ->join('horarios','buses.id','=','horarios.id_bus')
        ->join('paradas','horarios.id_parada','=','paradas.id')
        ->select('rutas.*', 'paradas.*','horarios.*')
        ->where('rutas.nom_ruta',$ruta)->get();
        return view('livewire.rutas-p', compact('p'));
    }

    public function estacion($parada)
    {
       
        $p=DB::table('rutas')
        ->join('buses','rutas.id','=','buses.id_ruta')
        ->join('horarios','buses.id','=','horarios.id_bus')
        ->join('paradas','horarios.id_parada','=','paradas.id')
        ->select('rutas.*', 'paradas.*','horarios.*')
        ->where('paradas.nom_parada',$parada)->get();
        return view('livewire.estaciones', compact('p'));
    }

    Public function cambio(){
        if($this->button==true)
        $this->button=false;
        else{
            $this->button=true;
        }
    }
}
