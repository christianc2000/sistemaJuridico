<?php

namespace Database\Seeders;

use App\Models\Actividad;
use App\Models\Procurador;
use Illuminate\Database\Seeder;

class ProcuradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $procuradors = [
            ['id'=>2,
             'career'=>'Derechos',
             'placeEstudy'=>'UAGRM',
             'abogado_id'=>1

            ],
            ['id'=>3,
             'career'=>'Maestria en Penalista',
             'placeEstudy'=>'UAGRM',
             'abogado_id'=>1
            ]

        ];
        foreach ($procuradors as $procurador){
            Procurador::factory(1)->create($procurador);
        }

    }
}
