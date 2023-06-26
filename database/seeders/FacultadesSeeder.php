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
                'codfacultad' => '001',
                'nomfacultad' => 'Ingenieria'
            ],
            [
                'codfacultad' => '002',
                'nomfacultad' => 'Derecho'
            ],
            [
                'codfacultad' => '003',
                'nomfacultad' => 'Educacion'
            ],
            [
                'codfacultad' => '004',
                'nomfacultad' => 'Artes'
            ],
        ];

        
        DB::table('facultades')->insert($datos);

    }
}
