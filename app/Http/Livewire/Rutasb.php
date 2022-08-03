<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ruta;
use Livewire\WithPagination;
class Rutasb extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $nom_ruta, $inicio, $fin,$salida,$llegada,$recorrido,$_id;
    public $button=true;
    
    protected $rules = [
        'nom_ruta' => 'required',
        'inicio' => 'required',
        'fin' => 'required',
        'salida' => 'required',
        'llegada' => 'required',
        'recorrido' => 'required',
    ];
    protected $messages = [
        'nom_ruta.required' => 'campo requerido',
        'inicio.required' => 'campo requerido',
        'fin.required' => 'campo requerido',
        'salida.required' => 'campo requerido',
        'llegada.required' => 'campo requerido',
        'recorrido.required' => 'campo requerido',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $ruta=ruta::where('estado',1)->paginate(5);
        return view('livewire.rutasb', compact('ruta'));
    }
    public function guardar()
    {
        $this->validate();
        ruta::create([
            'nom_ruta' => $this->nom_ruta,
            'salida' => $this->salida,
            'llegada' => $this->llegada,
            'recorrido' => $this->recorrido,
           'inicio'=>$this->inicio,
            'fin'=> $this->fin,
            'estado'=>1,
        ]);
        $this->reset();
        session()->flash('message', 'registro guardado con exito.');
    }
    public function edit($id){
        //dd("asdasd");
        $ruta =ruta::find($id);
        $this->_id = $id;
        $this->nom_ruta=$ruta->nom_ruta;
        $this->salida=$ruta->salida;
        $this->llegada=$ruta->llegada;
        $this->recorrido=$ruta->recorrido;
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
        'recorrido' => $this->recorrido,
       'inicio'=>$this->inicio,
        'fin'=> $this->fin,
        'estado'=>1,
    ]);
        $this->reset();
       session()->flash('message', 'registro actualizado con exito.');
    }

    public function destroyL($id){
        
        $ruta =ruta::find($id);
        $ruta->update([
            'estado' => 0
        ]);
        $this->reset();
    }
}
