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
                'nomprograma' => 'Ing de Sistemas',
                'facultad' => '20',
            ],
            [
                'codprograma' => '20',
                'nomprograma' => 'Música',
                'facultad' => '10',
            ],
            [
                'codprograma' => '30',
                'nomprograma' => 'Ing Civil',
                'facultad' => '20',
            ],
            [
                'codprograma' => '40',
                'nomprograma' => 'Medicina',
                'facultad' => '30',
            ],
            [
                'codprograma' => '50',
                'nomprograma' => 'Psicología',
                'facultad' => '30',
            ]
        ];

        DB::table('programas')->insert($datos);
    }
}
