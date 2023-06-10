<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BarriosSeeder extends Seeder
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
                'codbarrio' => '101',
                'nombarrio' => 'San Ignacio',
                'estbarrio' => 3,
                'comuna' => 7
            ],
            [
                'codbarrio' => '102',
                'nombarrio' => 'La Aurora',
                'estbarrio' => 3,
                'comuna' => 7
            ],
            [
                'codbarrio' => '103',
                'nombarrio' => 'El Bosque',
                'estbarrio' => 4,
                'comuna' => 7
            ],
            [
                'codbarrio' => '104',
                'nombarrio' => 'Morasurco',
                'estbarrio' => 5,
                'comuna' => 9
            ],
            [
                'codbarrio' => '105',
                'nombarrio' => 'Las Cuadras',
                'estbarrio' => 3,
                'comuna' => 9
            ]
        ];

        DB::table('barrios')->insert($datos);
    }
}
