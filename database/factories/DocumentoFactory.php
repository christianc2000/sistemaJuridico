<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoFactory extends Factory
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
            'url'=> 'documentos_Judicial/'.$this->faker->image('public/storage/documentos_Judicial',640,480,null,false)
        ];
    }
}
