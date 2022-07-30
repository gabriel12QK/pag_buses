<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Registro extends Component
{
    public $form=[
        'name'=>'',
        'email'=>'',
        'password'=>'',
    ];
    public function submit()
    {
        dd($this->form);
    }
    public function render()
    {
        return view('livewire.registro');
    }
}
