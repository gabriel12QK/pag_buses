<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\cooperativa;
use App\Models\persona;
//query builder
use Illuminate\Support\Facades\DB;
class Cooperativab extends Component
{

    public $nom_coop;
    public $button=true;

    public function render()
    {

        $coop=DB::table('cooperativas')
        ->join('personas','cooperativas.id_dueño','=','personas.id')
        ->select('cooperativas.*','personas.*')
        //->where( 'personas.CI', 'like', '%'.$this->buscar.'%')
        -> where('cooperativas.estado',1)->get();
       // $p=persona::where('esatdo',1)->get();
        return view('livewire.cooperativab', compact('coop'));
    }
    
    public function guardar()
    {
        cooperativa::create([
            'nom_coop' => $this->nom_coop,
            'id_dueño'=> $this->id_dueño,

            'estado'=>1,
        ]);
        $this->reset();
    }

    public function edit($id){
        $coop = cooperativa::find($id);
        $this->_id = $id;
        $this->nom_coop=$coop->nom_coop;
        $this->button = false;

    }

    public function update(){
       // $this->validate();
       $coop = cooperativa::find( $this->_id);
        $coop->update([
            'nom_coop' => $this->nom_coop,
            'id_dueño'=> $this->id_dueño,

            'estado'=>1,
        ]);
        $this->reset();
       // session()->flash('message', 'registro actualizado con exito.');
    }

    public function destroyL($id){
        
        $coop = cooperativa::find($id);
        $coop->update([
            'estado' => 0
        ]);
        $this->reset();
    }

}
