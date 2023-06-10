<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EstudiantesSeeder extends Seeder
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
                'codestudiante' => '1010',
                'nomestudiante' => 'Pepito Pérez',
                'edaestudiante' => 25,
                'fechestudiante' => "1997-10-10",
                'sexestudiante' => 'M',
                'ciudad' => '10010',
                'barrio' => '101',
                'programa' => '20'
            ],
            [
                'codestudiante' => '1020',
                'nomestudiante' => 'Jorge Calvache',
                'edaestudiante' => 23,
                'fechestudiante' => "1999-09-10",
                'sexestudiante' => 'M',
                'ciudad' => '10030',
                'barrio' => '105',
                'programa' => '20'
            ],
            [
                'codestudiante' => '1030',
                'nomestudiante' => 'Juan López',
                'edaestudiante' => 23,
                'fechestudiante' => "1999-09-01",
                'sexestudiante' => 'M',
                'ciudad' => '10010',
                'barrio' => '103',
                'programa' => '10'
            ],
            [
                'codestudiante' => '1040',
                'nomestudiante' => 'Daniela Toro',
                'edaestudiante' => 21,
                'fechestudiante' => "2002-05-09",
                'sexestudiante' => 'F',
                'ciudad' => '10020',
                'barrio' => '102',
                'programa' => '20'
            ],
            [
                'codestudiante' => '1050',
                'nomestudiante' => 'Jairo Cuchalá',
                'edaestudiante' => 22,
                'fechestudiante' => "2000-07-07",
                'sexestudiante' => 'M',
                'ciudad' => '10010',
                'barrio' => '104',
                'programa' => '40'
            ]
        ];

        DB::table('estudiantes')->insert($datos);
    }
}
