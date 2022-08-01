<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\buses;
use App\Models\parada;
use App\Models\horario;

//query builder
use Illuminate\Support\Facades\DB;
class Horariob extends Component
{
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
        ->select('rutas.nom_ruta as ruta','rutas.llegada as destino', 'paradas.nom_parada as parada','horarios.*')->get();
        $p=parada::where('estado',1)->get();
        $bus=buses::where('estado',1)->get();
        return view('livewire.horariob', compact('p','bus','h'));
    }

    public function guardar()
    {
        $this->validate();
        horario::create([
            'frecuencia' => $this->frecuencia,
           'id_bus'=>$this->id_bus,
            'id_parada'=> $this->id_parada,
            
            //'paradas'=>$this->paradas=[],   
            //'estado'=>1,
        ]);

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
        $this->reset();
       // session()->flash('message', 'registro actualizado con exito.');
    }

    // public function destroyL($id){
        
    //     $hora =horario::find($id);
    //     $horario->update([
    //         'estado' => 0
    //     ]);
    //     $this->reset();
    // }
}
