<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CiudadesSeeder extends Seeder
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
                'codciudad' => '10010',
                'nomciudad' => 'San Juan de Pasto',
                'departamento' => '10',
            ],
            [
                'codciudad' => '10020',
                'nomciudad' => 'Cali',
                'departamento' => '20',
            ],
            [
                'codciudad' => '10030',
                'nomciudad' => 'Medellín',
                'departamento' => '30',
            ],
            [
                'codciudad' => '10040',
                'nomciudad' => 'Bogotá',
                'departamento' => '40',
            ],
            [
                'codciudad' => '10050',
                'nomciudad' => 'Ibagué',
                'departamento' => '50',
            ]
        ];
        
        DB::table('ciudades')->insert($datos);
    }
}
