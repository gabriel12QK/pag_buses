<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\parada;
use Livewire\WithPagination;
class Paradasb extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $nom_parada,$_id;
    public $button=true;

    protected $rules = [
        'nom_parada' => 'required',
    ];
    protected $messages = [
        'nom_parada.required' => 'campo requerido',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        $p=parada::where('estado',1)->paginate(5);
       return view('livewire.paradasb',compact('p'));
    }

    public function guardar()
    {
       $this->validate();
        parada::create([
            'nom_parada' => $this->nom_parada,
            'estado'=>1,
        ]);
        $this->reset();
        session()->flash('message', 'registro guardado con exito.');
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
       session()->flash('message', 'registro actualizado con exito.');
    }

    public function destroyL($id){
        
        $parada = parada::find($id);
        $parada->update([
            'estado' => 0
        ]);
        $this->reset();
    }

}
