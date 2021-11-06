<?php

namespace Database\Factories;

use App\Models\Expediente;
use App\Models\ProcesoJudicial;
use App\Models\Procurador;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoJudicialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $procurador=Procurador::all()->random();
        $expediente=Expediente::all()->random();
        $procesoJudicial=ProcesoJudicial::all()->random();
        return [
            'title'=>$this->faker->sentence(3),
            'procurador_id'=>$procurador->id,
            'expediente_id'=>$expediente->id,
            'proceso_judicial_id'=>$procesoJudicial->id
        ];
    }
}
