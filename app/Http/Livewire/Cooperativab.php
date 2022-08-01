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
        'nom_coop' => 'required',
        'id_dueño' => 'required',
    ];
    protected $messages = [
        'nom_coop.required' => 'campo requerido',
        'id_dueño.required' => 'campo requerido',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
       // $coop=cooperativa::where('estado',1)->get();
        $coop=DB::table('cooperativas')
        ->join('personas','cooperativas.id_dueño','=','personas.id')
        ->select('cooperativas.*','personas.nom as nom','personas.CI as CI')
        //->where( 'personas.CI', 'like', '%'.$this->cedula.'%' )
        -> where('cooperativas.estado',1)->paginate(5);
        $p=persona::where('estado',1)->get();
       
        return view('livewire.cooperativab', compact('p','coop'));
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
