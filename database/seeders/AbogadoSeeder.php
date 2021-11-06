<?php

namespace Database\Seeders;

use App\Models\Abogado;
use App\Models\Persona;
use Illuminate\Database\Seeder;

class AbogadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Abogado::create([
             'id'=>1,
             'specialty'=>'Criminalística'
        ]);
    }
}
