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
                'nombarrio' => 'La Minga',
                'estbarrio' => 2,
                'comuna' => 5
            ],
            [
                'codbarrio' => '102',
                'nombarrio' => 'El Pilar',
                'estbarrio' => 2,
                'comuna' => 5
            ],
            [
                'codbarrio' => '103',
                'nombarrio' => 'Chapal',
                'estbarrio' => 2,
                'comuna' => 5
            ],
            [
                'codbarrio' => '104',
                'nombarrio' => 'La Rosa',
                'estbarrio' => 2,
                'comuna' => 5
            ],
            [
                'codbarrio' => '105',
                'nombarrio' => 'Santa Clara',
                'estbarrio' => 2,
                'comuna' => 5
            ]
        ];

        DB::table('barrios')->insert($datos);
    }
}
