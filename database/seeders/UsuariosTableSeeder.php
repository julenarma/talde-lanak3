<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuarios;
class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuarios::truncate();

         $faker = \Faker\Factory::create();
 
        
         for ($i = 0; $i < 50; $i++) {
            Usuarios::create([
                 
                 'nombre' => $faker->sentence,
                 'desarrollador' => $faker->sentence,
                 'admin' => $faker->sentence,
             ]);
         }
    }
}
