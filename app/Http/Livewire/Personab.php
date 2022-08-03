<?php

namespace App\Http\Livewire;
use App\Models\persona;
use App\Models\tipo;
use Livewire\WithPagination;
//query builder
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Personab extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $nom,$ape,$CI,$telf,$id_tipo,$_id;
    public $button=true;
    protected $rules = [
        'nom' => 'required',
        'ape' => 'required',
        'CI' => 'required|min:10|numeric',
        'telf' => 'required|min:10|numeric',
        'id_tipo' => 'required',
    ];
    protected $messages = [
        'nom.required' => 'campo requerido',
        'ape.required' => 'campo requerido',
        'CI.required' => 'campo requerido',
        'CI.min' => 'minimo 10 caracteres',
        'CI.numeric' => 'solo se permiten numeros',
        'telf.required' => 'campo requerido',
        'telf.min' => 'minimo 10 caracteres',
        'telf.numeric' => 'solo se permiten numeros',
        'id_tipo.required' => 'campo requerido',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        
        $p=DB::table('personas')
        ->join('tipos','personas.id_tipo','=','tipos.id')
        ->select('personas.*','tipos.tipo')
        -> where('personas.estado',1)->paginate(5);
        $t=tipo::where('estado',1)->get();
        return view('livewire.personab', compact('p','t'));
    }

    public function guardar()
    {
        $this->validate();
        persona::create([
            'nom' => $this->nom,
            'ape'=> $this->ape,
            'CI'=> $this->CI,
            'telf'=> $this->telf,
            'id_tipo'=>$this->id_tipo,
            'estado'=>1,
        ]);
        $this->reset();
        session()->flash('message', 'registro guardado con exito.');
    }

    public function edit($id){
        $persona= persona::find($id);
        $this->_id = $id;
        $this->nom=$persona->nom;
        $this->ape=$persona->ape;
        $this->CI=$persona->CI;
        $this->telf=$persona->telf;
        $this->id_tipo=$persona->id_tipo;
        $this->button = false;

    }

    public function update(){
        $this->validate();
       $persona= persona::find( $this->_id);
        $persona->update([
            'nom' => $this->nom,
            'ape'=> $this->ape,
            'CI'=> $this->CI,
            'telf'=> $this->telf,
            'id_tipo'=>$this->id_tipo,
            'estado'=>1
        ]);
        $this->reset();
       session()->flash('message', 'registro actualizado con exito.');
    }

    public function destroyL($id){
        
        $persona= persona::find($id);
        $persona->update([
            'estado' => 0
        ]);
        $this->reset();
    }


}
