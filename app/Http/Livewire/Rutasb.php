<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ruta;
use App\Models\parada;
class Rutasb extends Component
{
    public $nom_ruta, $inicio, $fin,$id_parada=[];
    public function render()
    {
        $p=parada::all();
        return view('livewire.rutasb', compact('p'));
    }
    public function guardar()
    {
        ruta::create([
            'nom_ruta' => $this->nom_ruta,
            'inicio'=>$this->inicio,
            'fin'=> $this->fin,
            
            'id_parada'=>$_POST['id_parada'],   
            'estado'=>1,
        ]);
        // $id_parada = $this->id_parada->getAllPermissions()->pluck('id')->toArray();
        // foreach($id_parada as $id_parada) {
        // $this->id_parada[$id_parada] = $id_parada;
        // }
            // if (is_array($_POST['id_parada']))
            // {
            //   $t->id_parada=$this->id_parada;
            // } 

        $this->reset();
    }
}
