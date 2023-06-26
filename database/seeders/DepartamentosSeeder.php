<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
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
                'coddepto' => '52',
                'nomdepto' => 'Nariño'
            ],
            [
                'coddepto' => '86',
                'nomdepto' => 'Putumayo'
            ],
            [
                'coddepto' => '81',
                'nomdepto' => 'Arauca'
            ],
        ];
        
        DB::table('departamentos')->insert($datos);
    }
}
