<?php

namespace Database\Seeders;

use App\Models\ProgramClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProgramClass::create([
            'name' => 'Teratai Kids',
            'skills' =>(['Language, literacy & communication', 'Logical thinking & mathematical skills']),
            'description' => (['Read, write, and speak in English', 'Understand basic mathematical concepts']),
            'subject' => (['Smart Bacaan', 'Creative Arts']),
        ]);

        ProgramClass::create([
            'name' => 'Teratai Kids Islamic',
            'skills' =>(['Physical development & motor skills', 'Social & emotional development']),
            'description' => (['Develop fine motor skills', 'Good mannerisms']),
            'subject' => (['Smart Science', 'Hygiene/Moral']),
        ]);

        ProgramClass::create([
            'name' => 'Teratai Kids Play',
            'skills' =>(['Cognitive skills', 'Physical development & motor skills ']),
            'description' => (['Creative and imaginative thinking', 'Learn to be independent']),
            'subject' => (['Word Treasure', 'Sway N Swing with English']),
        ]);
    }
}
