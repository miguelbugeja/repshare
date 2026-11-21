<?php

namespace Database\Seeders;

use App\Models\MuscleGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MuscleGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $muscleGroups = [
            [
                'name' => 'Chest',
                'description' => 'Muscles responsible for pushing movements and upper body strength.',
            ],
            [
                'name' => 'Back',
                'description' => 'Muscles responsible for pulling movements and back stability.',
            ],
            [
                'name' => 'Shoulders',
                'description' => 'Muscles responsible for shoulder movement and stability.',
            ],
            [
                'name' => 'Biceps',
                'description' => 'Muscles located at the front of the upper arms.',
            ],
            [
                'name' => 'Triceps',
                'description' => 'Muscles located at the back of the upper arms.',
            ],
            [
                'name' => 'Forearms',
                'description' => 'Muscles responsible for wrist movement and grip strength.',
            ],
            [
                'name' => 'Abdominals',
                'description' => 'Muscles responsible for core stability and trunk movement.',
            ],
            [
                'name' => 'Quadriceps',
                'description' => 'Muscles located at the front of the thighs.',
            ],
            [
                'name' => 'Hamstrings',
                'description' => 'Muscles located at the back of the thighs.',
            ],
            [
                'name' => 'Glutes',
                'description' => 'Muscles responsible for hip extension and stability.',
            ],
            [
                'name' => 'Calves',
                'description' => 'Muscles located at the back of the lower legs.',
            ],
        ];

        foreach ($muscleGroups as $group) {
            MuscleGroup::firstOrCreate(
                ['name' => $group['name']],
                ['description' => $group['description']]
            );
        }
    }
}
