<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personas=[
            [
                'ci'=>'9821736',
                'name'=>'Christian Celso',
                'lastname'=>'Mamani Soliz',
                'phone'=>'63409229',
                'birth'=>'04-01-2000',
                'sexo'=>'M',
                'address'=>'calle camiri, B. 7 de julio, Plan 3000',
                'type'=>'A'
            ],
            [
                'ci'=>'9832322',
                'name'=>'Diego',
                'lastname'=>'Garcia Flores',
                'phone'=>'75878594',
                'birth'=>'28-02-1999',
                'sexo'=>'M',
                'address'=>'calle las Lomas, Virgen de Luja',
                'type'=>'P'
            ],
            [
                'ci'=>'4823322',
                'name'=>'Maida',
                'lastname'=>'Viera Lopez',
                'phone'=>'69849832',
                'birth'=>'14-11-1990',
                'sexo'=>'F',
                'address'=>'calle Heroes del Chaco, Cuarto anillo',
                'type'=>'P'
            ]
        ];
        foreach ($personas as $persona){
            Persona::create($persona);
        }
    }
}
