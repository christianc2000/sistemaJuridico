<?php

namespace Database\Seeders;

use App\Models\Juzgado;
use App\Models\ProcesoJudicial;
use Illuminate\Database\Seeder;

class ProcesoJudicialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $juzgado=Juzgado::all();
        $procesoJudicials = [
            ['name'=>'Proceso Penal',
             'description'=>'En estos se solucionan aquellas actuaciones que son tipificadas como delitos y que no queda en la mano de las personas denunciar o no, porque es obligación del Estado perseguir estas actuaciones. Por ejemplo, si una persona sufre un abuso sexual aunque esa persona no quiera llevarlo a juicio, es obligación del Estado que sea juzgado.',
             'juzgado_id'=>$juzgado->random()->id
            ],
            ['name'=>'Proceso civil',
             'description'=>'Se solucionan los conflictos entre particulares, siendo voluntad de los mismos llevar ante la autoridad judicial su controversia. Los procesos civiles son los que solventan gran cantidad de problemas familiares, herencias, contratos privados, derechos reales, etc.',
             'juzgado_id'=>$juzgado->random()->id
            ],
            ['name'=>'Proceso laboral',
             'description'=>' Solucionan los conflictos surgidos en el mundo laboral, entre empleadores y empleados. Se solucionan conflictos como despidos, diferencias en el salario, etc.',
             'juzgado_id'=>$juzgado->random()->id
            ],
            ['name'=>'Proceso Administrativo',
             'description'=>' Estos solucionan los problemas que se hayan generado con la administración pública, como por ejemplo la responsabilidad patrimonial de la administración. Sería el caso en que nos caigamos en una zanja por culpa de una carretera mal construida (obligación de la administración).',
             'juzgado_id'=>$juzgado->random()->id
            ],
            ['name'=>'Proceso Mercantil',
             'description'=>'Estos tipos de procesos se encargan de los problemas surgidos entre empresas, concursos de acreedores o problemas entre entidades financieras y sus clientes.',
             'juzgado_id'=>$juzgado->random()->id
            ]
        ];

        foreach($procesoJudicials as $procesoJudicial){
            ProcesoJudicial::create($procesoJudicial);
        }
    }
}
