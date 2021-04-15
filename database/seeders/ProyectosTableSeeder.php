<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyectos;

class ProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         Proyectos::truncate();

         $faker = \Faker\Factory::create();
 
        
         for ($i = 0; $i < 50; $i++) {
            Proyectos::create([
                 
                 'nombre' => $faker->sentence,
                 'cod_interno' => $faker->sentence,
                 'desarrollador_principal' => $faker->sentence,
             ]);
         }
    }
}
