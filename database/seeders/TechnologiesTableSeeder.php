<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker  $faker): void
    {
        $tecnologies = [
            "Tecnologia 1",
            "Tecnologia 2",
            "Tecnologia 3"
        ];

        foreach ($tecnologies as $tecnology) {

            $newTecnology = new Technology();
            $newTecnology->name = $tecnology;
            $newTecnology->color = $faker->hexColor();
            $newTecnology->save();
        }
    }
}
