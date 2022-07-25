<?php

namespace App\Http\Livewire;
use App\Models\persona;
use App\Models\tipo;

//query builder
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Personab extends Component
{
    public function render()
    {

        $p=DB::table('personas')
        ->join('tipos','personas.id_tipo','=','tipos.id')
        ->select('personas.*','tipos.*')
        //->where( 'personas.CI', 'like', '%'.$this->buscar.'%')
        -> where('personas.estado',1)->get();
        $t=tipo::where('estado',1)->get();
        return view('livewire.personab', compact('p','t'));
    }

    public function guardar()
    {
        persona::create([
            'nom' => $this->nom,
            'ape'=> $this->ape,
            'CI'=> $this->CI,
            'telf'=> $this->telf,
            'id_tipo'=>$this->id_tipo,
            'estado'=>1,
        ]);
        $this->reset();
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
       // $this->validate();
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
       // session()->flash('message', 'registro actualizado con exito.');
    }

    public function destroyL($id){
        
        $persona= persona::find($id);
        $persona->update([
            'estado' => 0
        ]);
        $this->reset();
    }


}
