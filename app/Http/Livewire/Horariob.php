<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\buses;
use App\Models\parada;
use App\Models\horario;
class Horariob extends Component
{
    public $frecuencia,$id_parada,$id_bus;

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
        $p=parada::where('estado',1)->get();
        $bus=buses::where('estado',1)->get();
        return view('livewire.horariob', compact('p','bus'));
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
}
