<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\parada;

class Paradasb extends Component
{
    public $nom_parada;
    public $button=true;

    public function render()
    {
        $p=parada::all();
       return view('livewire.paradasb',compact('p'));
    }

    public function guardar()
    {
       
        parada::create([
            'nom_parada' => $this->nom_parada,
            'estado'=>1,
        ]);
        $this->reset();
    }

    public function edit($id){
        $parada = parada::find($id);
        $this->_id = $id;
        $this->nom_parada=$parada->nom_parada;
        $this->button = false;

    }

    public function update(){
       // $this->validate();
       $parada = parada::find( $this->_id);
        $parada->update([
            'nom_parada' => $this->nom_parada,      
            'estado' => 1,
        ]);
        $this->reset();
       // session()->flash('message', 'registro actualizado con exito.');
    }

    public function destroyL($id){
        
        $parada = parada::find($id);
        $parada->update([
            'estado' => 0
        ]);
        $this->reset();
    }

}
