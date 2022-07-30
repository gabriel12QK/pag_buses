<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ruta;

class Rutasb extends Component
{
    public $nom_ruta, $inicio, $fin,$salida,$llegada;
    
    public function render()
    {
       
        return view('livewire.rutasb');
    }
    public function guardar()
    {
        ruta::create([
            'nom_ruta' => $this->nom_ruta,
            'salida' => $this->salida,
            'llegada' => $this->llegada,
           'inicio'=>$this->inicio,
            'fin'=> $this->fin,
            
            //'paradas'=>$this->paradas=[],   
            'estado'=>1,
        ]);
        // $p= new ruta;
        // if (isset($_POST["paradas"])){
        //     $p->paradas=$_POST["paradas"];
        //     $this->reset();
        // }

        $this->reset();
    }
}
