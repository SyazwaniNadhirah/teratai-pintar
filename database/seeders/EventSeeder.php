<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'Title' => 'New Year 2024',
            'category' => 'Warning',
            'description' => 'Celebration of 2024',
            'start_time' => '2024-01-01 23:51:00',
            'end_time' => '2024-01-02 03:53:00'
        ]);

        Event::create([
            'Title' => 'Term 3 Break',
            'category' => 'Info',
            'description' => 'School Break for Student',
            'start_time' => '2024-01-19 23:51:00',
            'end_time' => '2024-01-25 03:53:00'
        ]);
    }
}
