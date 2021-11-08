<?php

namespace Database\Seeders;

use App\Models\Juzgado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $procuradors = 'public/procuradors';//para direccionar la carpeta
        $documentoJudicial = 'public/documentos_Judicial';

        Storage::deleteDirectory($procuradors);//para eliminar la carpeta
        Storage::makeDirectory($procuradors);//para crear la carpeta

        Storage::deleteDirectory($documentoJudicial);//para eliminar la carpeta
        Storage::makeDirectory($documentoJudicial);//para crear la carpeta

        $this->call(PersonaSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AbogadoSeeder::class);
        $this->call(ProcuradorSeeder::class);
        $this->call(ActividadSeeder::class);
        $this->call(ExpedienteSeeder::class);
        $this->call(JuzgadoSeeder::class);
        $this->call(ProcesoJudicialSeeder::class);
        $this->call(DocumentoJudicialSeeder::class);
    }
}
