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
            'Laravel',
            'React',
            'Node.js',
            'Express',
            'MySQL',
            'PHP',
            'JavaScript',
            'HTML',
            'CSS',
            'Bootstrap'
        ];

        foreach ($types as $typeName) {
            Type::create(['name' => $typeName]);
        }
    }
}
