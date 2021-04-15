<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Registros;

class RegistrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Registros::truncate();

         $faker = \Faker\Factory::create();
 
        
         for ($i = 0; $i < 50; $i++) {
            Registros::create([
                 
                 
                 'fecha_alta' => $faker->sentence,
                 'fecha_modif' => $faker->sentence,
                 'usuario' => $faker->sentence,
                 'usuario_modif' => $faker->sentence,
                 'id_proyecto' => $faker->sentence,
                 'id_subproyecto' => $faker->sentence,
                 'cod_interno' => $faker->sentence,
                 'mantis' => $faker->sentence,
                 'tiempo' => $faker->sentence,
                 'observaciones' => $faker->sentence,
             ]);
         }
    }
}
