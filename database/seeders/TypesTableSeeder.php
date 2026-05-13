<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = ["Tipo 1", "Tipo 2", "Tipo 3"];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type;
            $newType->description = $faker->sentence();

            $newType->save();
        }
    }
}
