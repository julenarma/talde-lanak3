<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subproyectos;
class SubproyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subproyectos::truncate();

         $faker = \Faker\Factory::create();
 
        
         for ($i = 0; $i < 50; $i++) {
            Subproyectos::create([
                 
                 
                 'nombre_subproyecto' => $faker->sentence,
                 'cod_interno' => $faker->sentence,
                 'id_proyecto' => $faker->sentence,
                 'desarrollador_principal' => $faker->sentence,
             ]);
         }
    }
}
