<?php

namespace Database\Seeders;

use App\Models\Juzgado;
use Illuminate\Database\Seeder;

class JuzgadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Juzgado::create([
           'name'=>'Palacio de Justicia',
           'address'=>'Av. Uruguay y, Santa Cruz de la Sierra',
           'attention'=>'lun a Vie 8:00-16:00'
        ]);
        Juzgado::create([
            'name'=>'Juzgado Público de Familia Distrito 9',
            'address'=>'5R37+928, Santa Cruz de la Sierra',
            'attention'=>'lun a Vie de 8:00-12:00 y 15:00-18:30'
         ]);
    }
}
