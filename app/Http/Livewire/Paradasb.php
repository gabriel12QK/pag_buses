<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\parada;
class Paradasb extends Component
{
    public $nom_parada;
    public function render()
    {
       return view('livewire.paradasb');
    }

    public function guardar()
    {
        parada::create([
            'nom_parada' => $this->nom_parada,
            'estado'=>1,
        ]);
        $this->reset();
    }

}
