<?php

namespace App\Http\Controllers;
use App\Models\Expediente;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(){

        $expedientes=Expediente::all();
        return view('welcome', compact('expedientes'));
    }
}
