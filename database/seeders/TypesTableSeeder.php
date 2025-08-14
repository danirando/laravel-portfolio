<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
  "Web app",
  "Mobile app",
  "API / Backend service",
  "Single Page Application (SPA)",
  "Data analysis / Machine Learning",
  "IoT / Hardware project",
  "Videogame / Multimedia",
  "Open source library / tool",
  "Dashboard interattiva",
  "Ecommerce platform"
];

        foreach ($types as $typeName) {
            Type::create(['name' => $typeName]);
        }
    }
}
