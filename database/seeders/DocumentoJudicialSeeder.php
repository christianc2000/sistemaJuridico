<?php

namespace Database\Seeders;

use App\Models\Documento;
use App\Models\DocumentoJudicial;
use Illuminate\Database\Seeder;

class DocumentoJudicialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentoJudicial::factory(30)->create()->each(function(DocumentoJudicial $docJud){
            Documento::factory(2)->create([//creamos 4 factorys documentos por un factory documento judicial
                'documenteable_id' => $docJud->id,
                'documenteable_type'=> DocumentoJudicial::class
            ]);
        });//el metodo each, recorre cada uno de los producto, es como un foreach, para capturar cada producto

    }
}
