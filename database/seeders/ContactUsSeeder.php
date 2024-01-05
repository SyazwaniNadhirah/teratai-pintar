<?php

namespace Database\Seeders;
use App\Models\ContactUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        ContactUs::create([
            'user_id' => '2',
            'subject' => 'Cannot Register',
            'message' => 'The form are not displayed',
        ]);

        ContactUs::create([
            'user_id' => '3',
            'subject' => 'Unreachable Call',
            'message' => 'I tried call the centre but never reach',
        ]);

        ContactUs::create([
            'user_id' => '4',
            'subject' => 'Empty Application',
            'message' => 'When submit the application, the detail application are empty',
        ]);
        
    }
}
