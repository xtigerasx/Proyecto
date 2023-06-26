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
                'nomestudiante' => 'Jorge Cordoba',
                'edaestudiante' => 25,
                'fechestudiante' => "1998-06-08",
                'sexestudiante' => 'M',
                'ciudad' => '1004',
                'barrio' => '101',
                'programa' => '10'
            ],
            [
                'codestudiante' => '1020',
                'nomestudiante' => 'Andres Florez',
                'edaestudiante' => 20,
                'fechestudiante' => "2000-01-13",
                'sexestudiante' => 'M',
                'ciudad' => '1001',
                'barrio' => '103',
                'programa' => '50'
            ],
            [
                'codestudiante' => '1030',
                'nomestudiante' => 'Frederick Buesaquillo',
                'edaestudiante' => 24,
                'fechestudiante' => "1999-02-10",
                'sexestudiante' => 'M',
                'ciudad' => '1003',
                'barrio' => '102',
                'programa' => '30'
            ],
            [
                'codestudiante' => '1040',
                'nomestudiante' => 'Laura Coral',
                'edaestudiante' => 21,
                'fechestudiante' => "1996-04-22",
                'sexestudiante' => 'F',
                'ciudad' => '1002',
                'barrio' => '104',
                'programa' => '20'
            ],
            
        ];

        DB::table('estudiantes')->insert($datos);
    }
}
