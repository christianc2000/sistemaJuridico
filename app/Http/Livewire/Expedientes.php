<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Expedientes extends Component
{
    public $expediente;
    public function render()
    {
        return view('livewire.expedientes');//expediente se pasa desde la vista Welcome
    }
}
