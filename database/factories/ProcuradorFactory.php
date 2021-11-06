<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProcuradorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           //almacenaremos las imagenes en public->storage,  primer parametro direccion,ancho, alto de la imagen
          'authority'=>'procuradors/' . $this->faker->image('public/storage/procuradors',640,480,null,false)
        ];
    }
}
