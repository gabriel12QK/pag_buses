<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ruta;

class Rutasb extends Component
{
    public $nom_ruta, $inicio, $fin,$salida,$llegada,$_id;
    public $button=true;
    
    protected $rules = [
        'nom_ruta' => 'required',
        'inicio' => 'required',
        'fin' => 'required',
        'salida' => 'required',
        'llegada' => 'required',
    ];
    protected $messages = [
        'nom_ruta.required' => 'campo requerido',
        'inicio.required' => 'campo requerido',
        'fin.required' => 'campo requerido',
        'salida.required' => 'campo requerido',
        'llegada.required' => 'campo requerido',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $ruta=ruta::where('estado',1)->get();
        return view('livewire.rutasb', compact('ruta'));
    }
    public function guardar()
    {
        $this->validate();
        ruta::create([
            'nom_ruta' => $this->nom_ruta,
            'salida' => $this->salida,
            'llegada' => $this->llegada,
           'inicio'=>$this->inicio,
            'fin'=> $this->fin,
            'estado'=>1,
        ]);
        $this->reset();
    }
    public function edit($id){
        //dd("asdasd");
        $ruta =ruta::find($id);
        $this->_id = $id;
        $this->nom_ruta=$ruta->nom_ruta;
        $this->salida=$ruta->salida;
        $this->llegada=$ruta->llegada;
        $this->inicio=$ruta->inicio;
        $this->fin=$ruta->fin;
        $this->button = false;

    }

    public function update(){
       $this->validate();
       $ruta =ruta::find( $this->_id);
       $ruta->update([
        'nom_ruta' => $this->nom_ruta,
        'salida' => $this->salida,
        'llegada' => $this->llegada,
       'inicio'=>$this->inicio,
        'fin'=> $this->fin,
        'estado'=>1,
    ]);
        $this->reset();
       // session()->flash('message', 'registro actualizado con exito.');
    }

    public function destroyL($id){
        
        $ruta =ruta::find($id);
        $ruta->update([
            'estado' => 0
        ]);
        $this->reset();
    }
}
