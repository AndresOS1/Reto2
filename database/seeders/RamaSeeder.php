<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rama = [
            ['nombre_rama' => 'Derecho Penal'],
            ['nombre_rama' => 'Derecho Laboral'],
        ];
        DB::table('rama_derechos')->insert($rama);
    }
}
