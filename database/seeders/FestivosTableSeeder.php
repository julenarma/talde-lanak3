<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Festivos;
class FestivosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Festivos::truncate();

        $faker = \Faker\Factory::create();

       
        for ($i = 0; $i < 50; $i++) {
           Festivos::create([
                
                'anio' => $faker->sentence,
                'dia' => $faker->sentence,
                
            ]);
        }
    }
}
