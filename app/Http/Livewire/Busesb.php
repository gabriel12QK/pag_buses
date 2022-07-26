<?php

namespace App\Http\Livewire;
use App\Models\buses;
use App\Models\cooperativa;
use App\Models\persona;
use App\Models\ruta;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Busesb extends Component
{
    public $matricula, $modelo, $capacidad, $id_chofer, $id_coop, $id_ruta,$numero,$_id;
    public $button=true;
    public $buscar;
    
   use WithPagination;
   protected $paginationTheme = 'bootstrap';

  protected $rules = [
    'matricula' => 'required',
    'modelo' => 'required',
    'capacidad' => 'required|numeric',
   'numero' => 'required|numeric',
    'id_chofer' => 'required',
    'id_coop' => 'required',
    'id_ruta' => 'required',
];
protected $messages = [
    'matricula.required' => 'campo requerido',

    'capacidad.required' => 'campo requerido',
    'numero.required' => 'campo requerido',
    'numero.numeric' => 'solo se permiten numeros',
    'modelo.required' => 'campo requerido',
    'capacidad.numeric' => 'solo se permiten numeros',
    'id_chofer.required' => 'campo requerido',
    'id_coop.required' => 'campo requerido',
    'id_ruta.required' => 'campo requerido',
];
public function updated($propertyName)
{
    $this->validateOnly($propertyName);
}
    public function render()
    {
        //para la consulta usare query builder
        $bus=DB::table('buses')
        ->join('rutas','buses.id_ruta','=', 'rutas.id')
        ->join('cooperativas','buses.id_coop','=', 'cooperativas.id')
        ->join('personas','buses.id_chofer','=', 'personas.id')
        ->select('buses.*','rutas.nom_ruta as ruta','personas.nom as nom','cooperativas.nom_coop as coop')
        -> where('buses.estado',1)->paginate(5);
        
        $chofer=DB::table('personas')
        ->join('tipos','personas.id_tipo','=','tipos.id')
        ->select('tipos.*','personas.*')
        ->where('tipos.tipo',"conductor")
        ->where('personas.estado',1)->get();

        //para los selects uso eloquent
        $coop=cooperativa::where('estado',1)->get();
        $ruta=ruta::where('estado',1)->get();
      

        return view('livewire.busesb',compact('coop','ruta','chofer','bus'));
    }


   public function guardar(){
    $this->validate();
    buses::create([
        'matricula' => $this->matricula,
        'modelo'=>$this->modelo,
        'capacidad'=> $this->capacidad, 
        'estado'=>1,
        'id_chofer'=>$this->id_chofer,
        'id_coop'=>$this->id_coop,
        'numero'=> $this->numero, 
        'id_ruta'=>$this->id_ruta,
    ]);
    session()->flash('message', 'registro guardado con exito.');
    $this->reset();
   }

   //funcion para buscar el elemnto en la base de datos y traer los datos guardados del mismo
   public function edit($id)
   {
    $buses =buses::find($id);
    $this->_id = $id;
    $this->matricula=$buses->matricula;
    $this->capacidad=$buses->capacidad;
    $this->modelo=$buses->modelo;
    $this->id_chofer=$buses->id_chofer;
    $this->id_coop=$buses->id_coop;
    $this->id_ruta=$buses->id_ruta;
     $this->numero=$buses->numero;
    $this->button = false;

    }

    //funcion para la actualizacion de datos
 public function update(){
    $this->validate();
    $buses =buses::find( $this->_id);
    $buses->update([
        'matricula' => $this->matricula,
        'modelo'=>$this->modelo,
        'capacidad'=> $this->capacidad, 
        'numero'=> $this->numero, 
        'estado'=>1,
        'id_chofer'=>$this->id_chofer,
        'id_coop'=>$this->id_coop,
        'id_ruta'=>$this->id_ruta,
    ]);
    $this->reset();
    session()->flash('message', 'registro actualizado con exito.');
}

//borrado de datos
public function destroyL($id)
    {
    
    $buses =buses::find($id);
    $buses->update([
        'estado' => 0
    ]);
    $this->reset();
    }
    
}
