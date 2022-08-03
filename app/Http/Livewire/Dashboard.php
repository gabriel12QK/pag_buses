<?php

namespace App\Http\Livewire;
use App\Models\buses;
use App\Models\cooperativa;
use App\Models\parada;
use App\Models\ruta;
use Livewire\Component;
use Livewire\WithPagination;
//query builder
use Illuminate\Support\Facades\DB;
class Dashboard extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $buses = buses::count();
        $cooperativa = cooperativa::where('estado',1)->count();
        $parada = parada::where('estado',1)->count();
        $ruta= ruta::where('estado',1)->count();

        $h=DB::table('rutas')
        ->join('buses','rutas.id','=','buses.id_ruta')
        ->join('cooperativas','buses.id_coop','=','cooperativas.id')
        ->join('personas','cooperativas.id_dueño','=','personas.id')
        ->join('tipos','personas.id_tipo','=','tipos.id')
        ->select('rutas.nom_ruta as ruta','cooperativas.nom_coop','buses.*')
        ->orderby('cooperativas.nom_coop', 'asc')
        ->where('buses.estado',1)
        ->paginate(5);

        return view('livewire.dashboard',compact('buses','cooperativa','parada','ruta','h'));
    }

}
