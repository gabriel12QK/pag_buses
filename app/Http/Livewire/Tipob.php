<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\tipo;
use Livewire\WithPagination;
class Tipob extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $tipo,$_id;
    public $button=true;

    protected $rules = [
        'tipo' => 'required|unique:tipos,tipo',
    ];
    protected $messages = [
        'tipo.required' => 'campo requerido',
        'tipo.unique' => 'ya existe esta clase de tipo',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }




    public function render()
    {
        $t=tipo::where('estado',1)->paginate(5);
        return view('livewire.tipob', compact('t'));
    }

    public function guardar()
    {
        $this->validate();
        tipo::create([
            'tipo' => $this->tipo,
            'estado'=>1,
        ]);
        $this->reset();
        session()->flash('message', 'registro guardado con exito.');
    }

    public function edit($id){
        //dd("asdasd");
        $tipo =tipo::find($id);
        $this->_id = $id;
        $this->tipo=$tipo->tipo;
        $this->button = false;

    }

    public function update(){
       $this->validate();
       $tipo =tipo::find( $this->_id);
        $tipo->update([
            'tipo' => $this->tipo,      
            'estado' => 1,
        ]);
        $this->reset();
      session()->flash('message', 'registro actualizado con exito.');
    }

    public function destroyL($id){
        
        $tipo =tipo::find($id);
        $tipo->update([
            'estado' => 0
        ]);
        $this->reset();
    }

}
