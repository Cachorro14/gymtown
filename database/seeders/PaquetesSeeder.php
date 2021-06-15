<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PaquetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paquetes')->insert([
            'nombre' => 'Paquete Basico',
            'precio' => '299.00',
            'tipo' => 'Mensual',
            'descripcion' => '¡Entrena!, Tu primer paso para tu bienestar. Acceso a sucursales selectas, Horario 9:00 a 16:00',
        ]);

        DB::table('paquetes')->insert([
            'nombre' => 'Plan Black',
            'precio' => '499.00',
            'tipo' => 'Mensual',
            'descripcion' => 'Entrena en cualquiera de nuestras unidades a la hora que prefieras, con acceso a nutriologo 1 vez a la semana y tres horas de clase a la semana(la clase es  eleccion personal).',
       ]);

       DB::table('paquetes')->insert([
            'nombre' => 'Full Pass',
            'precio' => '699.00',
            'tipo' => 'Mensual',
            'descripcion' => 'Acceso ilimitado a todas nuestras areas y clases exclusivas!, Estamos 24/7 solo para ti.',
        ]);

        DB::table('paquetes')->insert([
            'nombre' => 'Full year',
            'precio' => '6990.00',
            'tipo' => 'Anual',
            'descripcion' => 'Acceso ilimitado a todas nuestras areas y clases exclusivas!, Estamos 24/7 solo para ti.',
        ]);

        DB::table('paquetes')->insert([
            'nombre' => 'Black year',
            'precio' => '4990.00',
            'tipo' => 'Anual',
            'descripcion' => 'Entrena en cualquiera de nuestras unidades a la hora que prefieras, con acceso a nutriologo 1 vez a la semana y tres horas de clase a la semana(la clase es  eleccion personal).',
        ]);

    }
}
