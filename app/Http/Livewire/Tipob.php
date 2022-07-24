<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\tipo;

class Tipob extends Component
{
    public $tipo;
    public $button=true;

    public function render()
    {
        return view('livewire.tipob');
    }

    public function guardar()
    {
        tipo::create([
            'tipo' => $this->tipo,
            'estado'=>1,
        ]);
        $this->reset();
    }

    public function edit($id){
        $tipo =tipo::find($id);
        $this->_id = $id;
        $this->tipo=$tipo->tipo;
        $this->button = false;

    }

    public function update(){
       // $this->validate();
       $tipo =tipo::find( $this->_id);
        $tipo->update([
            'tipo' => $this->tipo,      
            'estado' => 1,
        ]);
        $this->reset();
       // session()->flash('message', 'registro actualizado con exito.');
    }

    public function destroyL($id){
        
        $tipo =tipo::find($id);
        $tipo->update([
            'estado' => 0
        ]);
        $this->reset();
    }

}
