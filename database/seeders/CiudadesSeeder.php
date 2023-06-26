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
                'codciudad' => '1001',
                'nomciudad' => 'Pasto',
                'departamento' => '52',
            ],
            [
                'codciudad' => '1002',
                'nomciudad' => 'Mocoa',
                'departamento' => '86',
            ],
            [
                'codciudad' => '1003',
                'nomciudad' => 'Puerto Asis',
                'departamento' => '86',
            ],
            [
                'codciudad' => '1004',
                'nomciudad' => 'Arauca',
                'departamento' => '81',
            ],
            [
                'codciudad' => '1005',
                'nomciudad' => 'Fortul',
                'departamento' => '81',
            ]
        ];
        
        DB::table('ciudades')->insert($datos);
    }
}
