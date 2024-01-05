<?php

namespace Database\Seeders;
use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        Activity::create([
            'branch' => 'Teratai Pintar, Setia Alam',
        ]);
        Activity::create([
            'branch' => 'Teratai Pintar, Presint 17',
        ]);

        Activity::create([
            'branch' => 'Teratai Pintar, Kota Kemuning',
        ]);
    }
}
