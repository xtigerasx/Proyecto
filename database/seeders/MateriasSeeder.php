<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class MateriasSeeder extends Seeder
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
                'codmateria' => '10',
                'nommateria' => 'Tópicos',
                'cremateria' => 2,
            ],
            [
                'codmateria' => '20',
                'nommateria' => 'Ing de Software',
                'cremateria' => 2,
            ],
            [
                'codmateria' => '30',
                'nommateria' => 'Bases de Datos',
                'cremateria' => 3,
            ],
            [
                'codmateria' => '40',
                'nommateria' => 'Programación',
                'cremateria' => 4,
            ],
            [
                'codmateria' => '50',
                'nommateria' => 'Telematica',
                'cremateria' => 2,
            ]
        ];

        DB::table('materias')->insert($datos);
    }
}
