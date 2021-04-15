<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Settings;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::truncate();

         $faker = \Faker\Factory::create();
 
        
         for ($i = 0; $i < 50; $i++) {
            Settings::create([
                 
                 'horas_jornada' => $faker->sentence,
                 
             ]);
         }
    }
}
