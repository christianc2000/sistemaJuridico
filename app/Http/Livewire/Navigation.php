<?php

namespace App\Http\Livewire;

use App\Models\Expediente;
use Livewire\Component;


class Navigation extends Component
{

    public function render()
    {
        $Expedientes=Expediente::all();

        return view('livewire.navigation',compact('Expedientes'));
    }
}
