<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RutinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rutinas')->insert([
            'nombre' => 'Parte superior Definicion',
            'duracion' => '45 Minutos',
            'descripcion' => 'Circuito de ejercicios parte superior del cuerpo para definir, 4 ejercicios con repeticiones de 15/20,4 rondas y descanso de dos minutos entre cada ronda.',
            'ejercicios' => 'Press de banca con mancuernas (pecho), Remo sentado (Dorsal), Press francess tumbado con barra (triceps), curl de barra(bíceps).',
            
        ]);

        DB::table('rutinas')->insert([
            'nombre' => 'Parte Inferior Definicion',
            'duracion' => '50 Minutos',
            'descripcion' => 'Circuito de ejercicios parte inferior del cuerpo para definir, 4 ejercicios con repeticiones de 10/30,4 rondas y descanso de dos minutos entre cada ronda.',
            'ejercicios' => 'Sentadillas, curl de piernas sentado, peso muerto rumano, prensa de piernas.',
            
        ]);

        DB::table('rutinas')->insert([
            'nombre' => 'Pecho y espalda',
            'duracion' => '55 Minutos',
            'descripcion' => 'Circuito de ejercicios para trabajar pecho y espalda, 4 ejercicios con 10 series y 10 repeticiones, con 90 segundos de descanso por serie.',
            'ejercicios' => 'Press banca con barra, remo en barra de pie, crossover de cable, remo con agarre cerrado.',
            
        ]);

        DB::table('rutinas')->insert([
            'nombre' => 'Piernas y abdominales',
            'duracion' => '50 Minutos',
            'descripcion' => 'Circuito de ejercicios para aumentar fuerza en piernas y abdominales, 2 ejercicios con 10 series y 10 repeticiones, con 90 segundos de descanso por serie y 2 ejecicios con 3 series y 10 repeticiones, descanso de 60 segundos por serie.',
            'ejercicios' => 'Sentadilla con barra, curl tumbado femoral, levantamiento pantorrillas sentado, levantamiento de pierna colgante.',
            
        ]);

        DB::table('rutinas')->insert([
            'nombre' => 'Brazos y hombros',
            'duracion' => '50 Minutos',
            'descripcion' => 'Circuito de ejercicios para aumentar fuerza en brazos  y hombros, 4 ejercicios con 10 series de 6 repeticiones, con 60 segundos de descanso por serie.',
            'ejercicios' => 'Press de banca agarre cerrado, curl de barra, elevación lateral, pájaro.',
            
        ]);

        DB::table('rutinas')->insert([
            'nombre' => 'CrossFit 1',
            'duracion' => '25 Minutos',
            'descripcion' => 'El circuito incluye 50 repeticiones de 10 ejercicios diferentes, todo hecho lo más rápido posible.',
            'ejercicios' => 'Realiza 50 saltos de caja con una caja de 24 pulgadas, 50 pull ups, 50 cambios de kettlebell, 50 pasos de lunge, 50 rodillas a codos, 50 repeticiones de press push con 45 libras, 50 extensiones traseras, 50 wallballs usando una bola de 20 libras , 50 burpees (cayendo todo el camino hasta el piso), 50 double-unders.',
            
        ]);

        DB::table('rutinas')->insert([
            'nombre' => 'CrossFit 2',
            'duracion' => '45 Minutos',
            'descripcion' => 'Un circuito sencillo pero demandante, correr, lagartijas, sentadillas, squats y correr otra vez, todo lo mas rápido posible.',
            'ejercicios' => 'Corre un kilometro y luego haz 100 pullups , 200 flexiones, 300 squats y luego corre otro kilometro.',
            
        ]);

        DB::table('rutinas')->insert([
            'nombre' => 'Novatos',
            'duracion' => '60 Minutos',
            'descripcion' => 'Un circuito sencillo, incluye cardio, abdominales y musculación para principiantes.',
            'ejercicios' => 'Caminar, hacer bicicleta o elíptica 15 minutos, Crunch y abdominales cortos en maquina 3x10, sentadillas, peso muerto.',
            
        ]);

        DB::table('rutinas')->insert([
            'nombre' => 'Novatos 2',
            'duracion' => '40 Minutos',
            'descripcion' => 'Un circuito sencillo, incluye cardio, abdominales y musculación para principiantes ',
            'ejercicios' => 'Saltar la cuera durante 3 minutos y descansar, 1. 3 series,  Crunch invertido,  sentadillas, peso muerto, press pectoral.',
            
        ]);
    }
}
