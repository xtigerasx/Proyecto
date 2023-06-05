<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FacultadesSeeder extends Seeder
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
                'codfacultad' => '10',
                'nomfacultad' => 'Artes'
            ],
            [
                'codfacultad' => '20',
                'nomfacultad' => 'Ingeniería'
            ],
            [
                'codfacultad' => '30',
                'nomfacultad' => 'Salud'
            ],
            [
                'codfacultad' => '40',
                'nomfacultad' => 'Música'
            ],
            [
                'codfacultad' => '50',
                'nomfacultad' => 'Derecho'
            ]
        ];

        
        DB::table('facultades')->insert($datos);

    }
}
