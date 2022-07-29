<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\cooperativa;
use App\Models\persona;
//query builder
use Illuminate\Support\Facades\DB;
class Cooperativab extends Component
{

    public $nom_coop, $id_dueño, $cedula;
    public $button=true;

    public function render()
    {

        $p=persona::where('personas.id_tipo',1)->get();
       
        return view('livewire.cooperativab', compact('p'));
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

    public function buscar($cedula){
        $coop=DB::table('cooperativas')
        ->join('personas','cooperativas.id_dueño','=','personas.id')
        ->join('tipos','personas.id_tipo','=','tipos.id')
        ->select('cooperativas.*','personas.*')
        -> where('personas.CI',$cedula)->get();
    }

}
