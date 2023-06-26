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
                'nommateria' => 'Programacion',
                'cremateria' => 4,
            ],
            [
                'codmateria' => '20',
                'nommateria' => 'Bases de Datos',
                'cremateria' => 4,
            ],
            [
                'codmateria' => '30',
                'nommateria' => 'Robotica',
                'cremateria' => 4,
            ],
            [
                'codmateria' => '40',
                'nommateria' => 'Ecosistemas',
                'cremateria' => 4,
            ],
            [
                'codmateria' => '50',
                'nommateria' => 'Redes Neuronales',
                'cremateria' => 4,
            ]
        ];

        DB::table('materias')->insert($datos);
    }
}
