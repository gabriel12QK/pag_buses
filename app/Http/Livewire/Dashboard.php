<?php

namespace App\Http\Livewire;
use App\Models\buses;
use App\Models\cooperativa;
use App\Models\parada;
use App\Models\ruta;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $buses = buses::count();
        $cooperativa = cooperativa::count();
        $parada = parada::count();
        $ruta= ruta::count();
        return view('livewire.dashboard',compact('buses','cooperativa','parada','ruta'));
    }

}
