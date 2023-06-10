<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class RegnotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=[
            // [
            //     'estudiante' => '',
            //     'materia' => 'San Ignacio',
            //     'profesor' => 3,
            //     'parcial1' => "1997-10-10",
            //     'parcial2' => 'M',
            //     'efinal' => '10010',
            //     'nfinal' => '101',
            //     'estado' => '10'
            // ],
            // [
            //     'estudiante' => '101',
            //     'materia' => 'San Ignacio',
            //     'profesor' => 3,
            //     'parcial1' => "1997-10-10",
            //     'parcial2' => 'M',
            //     'efinal' => '10010',
            //     'nfinal' => '101',
            //     'estado' => '10'
            // ],
            // [
            //     'estudiante' => '101',
            //     'materia' => 'San Ignacio',
            //     'profesor' => 3,
            //     'parcial1' => "1997-10-10",
            //     'parcial2' => 'M',
            //     'efinal' => '10010',
            //     'nfinal' => '101',
            //     'estado' => '10'
            // ],
            // [
            //     'estudiante' => '101',
            //     'materia' => 'San Ignacio',
            //     'profesor' => 3,
            //     'parcial1' => "1997-10-10",
            //     'parcial2' => 'M',
            //     'efinal' => '10010',
            //     'nfinal' => '101',
            //     'estado' => '10'
            // ],
            // [
            //     'estudiante' => '101',
            //     'materia' => 'San Ignacio',
            //     'profesor' => 3,
            //     'parcial1' => "1997-10-10",
            //     'parcial2' => 'M',
            //     'efinal' => '10010',
            //     'nfinal' => '101',
            //     'estado' => '10'
            // ]
        ];

        DB::table('regnotas')->insert($datos);
    }
}
