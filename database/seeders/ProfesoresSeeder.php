<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProfesoresSeeder extends Seeder
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
                'codprofesor' => '10',
                'nomprofesor' => 'Alexander Barón',
                'catprofesor' => '',
            ],
            [
                'codprofesor' => '20',
                'nomprofesor' => 'Ricardo Timarán',
                'catprofesor' => '',
            ],
            [
                'codprofesor' => '30',
                'nomprofesor' => 'Jesus Insuasty',
                'catprofesor' => '',
            ],
            [
                'codprofesor' => '40',
                'nomprofesor' => 'Juan Carlos Castillo',
                'catprofesor' => '',
            ],
            [
                'codprofesor' => '50',
                'nomprofesor' => 'Marcela Guerrero',
                'catprofesor' => '',
            ]
        ];

        DB::table('profesores')->insert($datos);
    }
}
