<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::create([
            'programType' => 'Preschool (Full Day)',
            'price' => 680.00,
            'status' => 'Active',
            'description' => 'An enhancement lesson to develop living skills, communication & interaction skills, mannerism & values.
            Programme Breakdown (8.30am-4.30pm)
            Teratai Pintar Preschool:
            Children enjoys structured fun-learning with Teratai Pintar syllabus, lesson includes languages, Islamic education and mathematics.
            Support session I (3R): Reinforcement, Revision, Relate.  
            Free Play, Lunch, Rest : Children use this time to let loose and use their energy as they please. They will fill up their tummies and have some me-time where they can either take a catnap, read a book, or just rest.  
            Support Session 2 (Islamic Session) : Once children finished resting, they will fill the time to perform Zuhur together. Children will also recite surah-surah lazim and do some Iqra’ reading.
            Break Time : A little tummy- filling before the afternoon fun session starts. This will boost up their energy and make them better in learning.',
            'picture' => 'public/banner/AsnSRQYSQsLVy2u22Wsc2J7vxmQgzYj8j5DU9AEJ.jpg'
        ]);

        Program::create([
            'programType' => 'Preschool (Morning)',
            'price' => 380.00,
            'status' => 'Active',
            'description' => 'An enhancement lesson to develop living skills, communication & interaction skills, mannerism & values.
            Programme Breakdown (8.30am-12.30pm)
            Comprehensive lessons with incorporation of academic subject and educational events/activities. Modules are fun-based and holistic.
            Compliance with the National Pre-School Curriculum Standard.
             Designed to enable your child’s seamless transition into formal education after graduation from Teratai Pintar.',
            'picture' => 'public/banner/cGG4c1t3GiHbnmp76bGVes2ir63YjEkwVRXdpkex.jpg'
        ]);
    }
}
