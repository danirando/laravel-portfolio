<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technology = [
    'HTML5',
    'CSS3',
    'JavaScript',
    'PHP',
    'Laravel',
    'MySQL',
    'React'
];

        foreach ($technology as $tech) {
            $newTechnology = new Technology();
            $newTechnology->name = $tech;
            $newTechnology->color = $faker->hexColor();
            $newTechnology->save();
        }
    }
}
