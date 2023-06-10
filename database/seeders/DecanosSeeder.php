<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DecanosSeeder extends Seeder
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
                'coddecano' => '10',
                'nomdecano' => 'Gerardo Sánchez',
                'facultad' => '10',
            ],
            [
                'coddecano' => '20',
                'nomdecano' => 'Alexander Barón',
                'facultad' => '20',
            ],
            [
                'coddecano' => '30',
                'nomdecano' => 'Ana Palacios',
                'facultad' => '30',
            ],
            [
                'coddecano' => '40',
                'nomdecano' => 'Jorge Pantoja',
                'facultad' => '40',
            ],
            [
                'coddecano' => '50',
                'nomdecano' => 'Leonardo Enríquez',
                'facultad' => '50',
            ]
        ];

        DB::table('decanos')->insert($datos);
    }
}
