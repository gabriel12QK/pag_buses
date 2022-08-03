<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\buses;
use App\Models\parada;
use App\Models\horario;
use Livewire\WithPagination;
//query builder
use Illuminate\Support\Facades\DB;
class Horariob extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $frecuencia,$id_parada,$id_bus, $_id;
    public $button=true;

    protected $rules = [
        'frecuencia' => 'required',
        'id_parada' => 'required',
        'id_bus' => 'required',
    ];
    protected $messages = [
        'frecuencia.required' => 'campo requerido',
        'id_parada.required' => 'campo requerido',
        'id_bus.required' => 'campo requerido',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        $h=DB::table('rutas')
        ->join('buses','rutas.id','=','buses.id_ruta')
        ->join('horarios','buses.id','=','horarios.id_bus')
        ->join('paradas','horarios.id_parada','=','paradas.id')
        ->select('rutas.nom_ruta as ruta','rutas.llegada as destino', 'paradas.nom_parada as parada','horarios.*')->paginate(5);
        $p=parada::where('estado',1)->get();
        $bus=DB::table('buses')
        ->join('cooperativas','buses.id_coop','=','cooperativas.id')
        ->select('buses.*','cooperativas.nom_coop')
        ->where('buses.estado',1)->get();
        return view('livewire.horariob', compact('p','bus','h'));
    }

    public function guardar()
    {
        $this->validate();
        horario::create([
            'frecuencia' => $this->frecuencia,
           'id_bus'=>$this->id_bus,
            'id_parada'=> $this->id_parada,  
            'estado'=>1,
        ]);
        session()->flash('message', 'registro actualizado con exito.');
        $this->reset();
    }

    public function edit($id){
        //dd("asdasd");
        $hora =horario::find($id);
        $this->_id = $id;
        $this->frecuencia=$hora->frecuencia;
        $this->id_bus=$hora->id_bus;
        $this->id_parada=$hora->id_parada;
        $this->button = false;

    }

    public function update(){
       $this->validate();
       $hora =horario::find( $this->_id);
        $hora->update([
            'frecuencia' => $this->frecuencia,
            'id_bus'=>$this->id_bus,
             'id_parada'=> $this->id_parada,
        ]);
        session()->flash('message', 'registro actualizado con exito.');
        $this->reset();
       
    }

    // public function destroyL($id){
        
    //     $hora =horario::find($id);
    //     $horario->update([
    //         'estado' => 0
    //     ]);
    //     $this->reset();
    // }
}
