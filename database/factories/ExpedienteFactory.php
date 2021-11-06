<?php

namespace Database\Factories;

use App\Models\Abogado;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Expediente;
use Illuminate\Support\Str; //para convertir a slug

class ExpedienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(2);
        $abogado=Abogado::all()->random();

        return [
           'name' =>$name,
	       'slug'=> Str::slug($name),
	       'ci' => $this->faker->numberBetween(0,12000000). $this->faker->randomLetter(),
	       'abogado_id'=>$abogado->id
        ];
    }
}
