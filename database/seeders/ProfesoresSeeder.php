<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=[
            [
                'codprofesor' => '10',
                'nomprofesor' => 'Giovanny Hernandes',
                'catprofesor' => '',
            ],
            [
                'codprofesor' => '20',
                'nomprofesor' => 'Ricardo Timarán',
                'catprofesor' => '',
            ],
            [
                'codprofesor' => '30',
                'nomprofesor' => 'Jorge Collazos',
                'catprofesor' => '',
            ],
            [
                'codprofesor' => '40',
                'nomprofesor' => 'Javier Villalba',
                'catprofesor' => '',
            ],
            [
                'codprofesor' => '50',
                'nomprofesor' => 'Juan Castillo',
                'catprofesor' => '',
            ]
        ];

        DB::table('profesores')->insert($datos);
    }
}
