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
                'nomdecano' => 'Pepito Perez',
                'facultad' => '001',
            ],
            [
                'coddecano' => '20',
                'nomdecano' => 'Martha Erazo',
                'facultad' => '002',
            ],
            [
                'coddecano' => '30',
                'nomdecano' => 'Mario Tulcan',
                'facultad' => '003',
            ],
            [
                'coddecano' => '40',
                'nomdecano' => 'Andres Almeida',
                'facultad' => '004',
            ],
            
        ];

        DB::table('decanos')->insert($datos);
    }
}
