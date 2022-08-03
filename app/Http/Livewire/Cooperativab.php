<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\cooperativa;
use App\Models\persona;


use Livewire\WithPagination;
//query builder
use Illuminate\Support\Facades\DB;
class Cooperativab extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $nom_coop, $id_dueño, $cedula,$_id;
    public $button=true;

    protected $queryString = ['cedula'];

    protected $rules = [
        'nom_coop' => 'required|unique:cooperativas,nom_coop',
        'id_dueño' => 'required',
    ];
    protected $messages = [
        'nom_coop.required' => 'campo requerido',
        'id_dueño.required' => 'campo requerido',
        'nom_coop.unique' => 'Cooperativa existente',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        //consulta para datos
        $coop=DB::table('cooperativas')
        ->join('personas','cooperativas.id_dueño','=','personas.id')
        ->select('cooperativas.*','personas.nom as nom','personas.CI as CI')
        ->where( 'personas.CI', 'like', '%'.$this->cedula.'%' )
        -> where('cooperativas.estado',1)->paginate(5);
        
        // consulta para conteo
        $b=DB::table('buses')
        ->join('cooperativas','buses.id_coop','=','cooperativas.id')
        ->selectRaw('count(buses.id) as cant, cooperativas.nom_coop')
        ->groupBy('cooperativas.nom_coop')->where('buses.estado',1) 
        -> get();
      // dd($b);
        $p=DB::table('personas')
        ->join('tipos','personas.id_tipo','=','tipos.id')
        ->select('tipos.*','personas.*')
        ->where('tipos.tipo',"dueño")
        ->where('personas.estado',1)->get();
      //  $=persona::where('estado',1)->get();
        return view('livewire.cooperativab', compact('p','coop','b'));
    }
    
    public function guardar()
    {
        $this->validate();
        cooperativa::create([
            'nom_coop' => $this->nom_coop,
            'id_dueño'=> $this->id_dueño,
            'estado'=>1,
        ]);
        
        $this->reset();
        session()->flash('message', 'registro actualizado con exito.');
    }

    public function edit($id){
        $coop = cooperativa::find($id);
        $this->_id = $id;
        $this->nom_coop=$coop->nom_coop;
        $this->button = false;
    }

    public function update(){
       $this->validate();
       $coop = cooperativa::find( $this->_id);
        $coop->update([
            'nom_coop' => $this->nom_coop,
            'id_dueño'=> $this->id_dueño,

            'estado'=>1,
        ]);
        $this->reset();
        session()->flash('message', 'registro actualizado con exito.');
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
