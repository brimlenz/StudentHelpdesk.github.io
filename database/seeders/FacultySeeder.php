<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faculties = [
            'Computing and Information Technology',
            'Engineering and Technology',
            'Science and Technology',
            'Business and Economics',
            'Media and Communication',
        ];

        foreach($faculties as $faculty)
        {
            $f = new Faculty();
            $f->name = $faculty;
            $f->save();
        }
    }
}
