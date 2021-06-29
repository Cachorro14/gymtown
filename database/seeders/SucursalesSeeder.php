<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SucursalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert([
            'nombre' => 'Gymtown Zapopan',
            'domicilio' => 'Ancla 1, Av. Juan Gil Preciado 1600 A, La Cima, 45130 Zapopan, Jal.',
        ]);
        DB::table('sucursales')->insert([
            'nombre' => 'Gymtown Andares',
            'domicilio' => 'Blvrd Puerta de Hierro 4965, Puerta de Hierro, 45116 Zapopan, Jal.',
        ]);
        DB::table('sucursales')->insert([
            'nombre' => 'Gymtown Midtown',
            'domicilio' => 'Av Adolfo López Mateos Nte 2405, Italia Providencia, 44648 Guadalajara, Jal.',
        ]);
        DB::table('sucursales')->insert([
            'nombre' => 'Gymtown Forum Tlaquepaque',
            'domicilio' => 'Av Río Nilo 373, San Carlos, 44840 Guadalajara, Jal.',
        ]);
        DB::table('sucursales')->insert([
            'nombre' => 'Gymtown ChapultepecS',
            'domicilio' => 'Av. Chapultepec Sur 480, Col Americana, Obrera, 44140 Guadalajara, Jal.',
        ]);
    }
}
