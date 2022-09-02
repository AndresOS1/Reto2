<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class InstanciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instancia = [
            ['estado' => 'Por Procesar'],
            ['estado' => 'En Proceso'],
            ['estado' => 'Procesado'],
            ['estado' => 'Reclamación'],


        ];
        DB::table('instancia')->insert($instancia);
    }
}
