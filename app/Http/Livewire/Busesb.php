<?php

namespace App\Http\Livewire;
use App\Models\buses;
use App\Models\cooperativa;
use App\Models\persona;
use App\Models\ruta;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Busesb extends Component
{
    public $mat, $modelo, $capacidad, $id_chofer, $id_coop, $id_ruta;
    public $button=true;
    public $buscar;
    //paginacion y busqueda
 //   use WithPagination;
   // protected $paginationTheme = 'bootstrap';
  //  protected $queryString = ['buscar'];

    public function render()
    {
        //para la consulta usare query builder
        $bus=DB::table('buses')
        ->join('rutas','buses.id_ruta','=', 'rutas.id')
        ->join('cooperativas','buses.id_coop','=', 'cooperativas.id')
       // ->join('persona','buses.id_chofer','=', 'personas.id')
        ->select('buses.*','rutas.nom_ruta as ruta',/*'persona.nom',*/'cooperativas.nom_coop as coop')
        //->where( 'nom', 'like', '%'.$this->buscar.'%')
        -> where('buses.estado',1)->get();
        //->paginate(5);
        //para los selects uso eloquent
        $coop=cooperativa::where('estado',1)->get();
        $ruta=ruta::where('estado',1)->get();
        $chofer=persona::where('estado',1)->get();

        return view('livewire.busesb',compact('coop','ruta','chofer'));
    }


   public function guardar(){
    buses::create([
        'matricula' => $this->mat,
        'modelo'=>$this->modelo,
        'capacidad'=> $this->capacidad, 
        'estado'=>1,
        'id_chofer'=>$this->id_chofer,
        'id_coop'=>$this->id_coop,
        'id_ruta'=>$this->id_ruta,
    ]);
    $this->reset();
   }

   //funcion para buscar el elemnto en la base de datos y traer los datos guardados del mismo
   public function edit($id)
   {
    $buses =buses::find($id);
    $this->_id = $id;
    $this->mat=$buses->matricula;
    $this->capacidad=$buses->capacidad;
    $this->modelo=$buses->modelo;
    $this->id_chofer=$buses->id_chofer;
    $this->id_coop=$buses->id_coop;
    $this->id_ruta=$buses->id_ruta;
    $this->button = false;

    }

    //funcion para la actualizacion de datos
   public function update(){
   // $this->validate();
    $buses =buses::find( $this->_id);
    $buses>update([
        'matricula' => $this->mat,
        'modelo'=>$this->modelo,
        'capacidad'=> $this->capacidad, 
        'estado'=>1,
        'id_chofer'=>$this->id_chofer,
        'id_coop'=>$this->id_coop,
        'id_ruta'=>$this->id_ruta,
    ]);
    $this->reset();
    //session()->flash('message', 'registro actualizado con exito.');
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
