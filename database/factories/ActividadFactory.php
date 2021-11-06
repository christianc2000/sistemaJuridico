<?php

namespace Database\Factories;

use App\Models\Abogado;
use App\Models\Procurador;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActividadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $procuradors = Procurador::all()->random();
        $abogado=Abogado::all()->random();
        return [
            'name'=>$this->faker->sentence(2),
            'received'=>$this->faker->boolean(),
            'finalized'=>$this->faker->dateTimeBetween('2020-03-15 08:00:49',now(),null),
            'compliment'=>$this->faker->boolean(1),
            'procurador_id'=>$procuradors->id,
            'abogado_id'=>$abogado->id
        ];
    }
}
