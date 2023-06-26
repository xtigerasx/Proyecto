<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProgramasSeeder extends Seeder
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
                'codprograma' => '10',
                'nomprograma' => 'Ingenieria de Sistemas',
                'facultad' => '001',
            ],
            [
                'codprograma' => '20',
                'nomprograma' => 'Derecho',
                'facultad' => '002',
            ],
            [
                'codprograma' => '30',
                'nomprograma' => 'Ing Civil',
                'facultad' => '001',
            ],
            [
                'codprograma' => '40',
                'nomprograma' => 'Arquitectura',
                'facultad' => '004',
            ],
            [
                'codprograma' => '50',
                'nomprograma' => 'Castellano y Literatura',
                'facultad' => '003',
            ]
        ];

        DB::table('programas')->insert($datos);
    }
}
