<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cits = [
            'Exam',
            'Finance',
            'Information Technology',
            'Computer Science',
        ];

        foreach($cits as $cit)
        {
            $record = new Department();
            $record->name = $cit;
            $record->faculty_id = 1;
            $record->save();
        }

        $foets = [
            'Exam',
            'Finance',
            'Electrical & Communication Engineering',
            'Civil Engineering',
            'Mechanical & Mechatronics Engineering',
        ];

        foreach($foets as $foet)
        {
            $record = new Department();
            $record->name = $foet;
            $record->faculty_id = 2;
            $record->save();
        }

        $fosts = [
            'Exam',
            'Finance',
            'Chemistry',
            'Mathematics',
            'Physics',
        ];

        foreach($fosts as $fost)
        {
            $record = new Department();
            $record->name = $fost;
            $record->faculty_id = 3;
            $record->save();
        }

        $fobes = [
            'Exam',
            'Finance',
            'Finance & Accounting',
            'Marketing & Management',
            'Procurement & Logistics',
        ];
        foreach($fobes as $fobe)
        {
            $record = new Department();
            $record->name = $fobe;
            $record->faculty_id = 4;
            $record->save();
        }

        $famecos = [
            'Exam',
            'Finance',
            'Journalism & Communication',
            'Film Production & Broadcasting',
        ];
        foreach($famecos as $fameco)
        {
            $record = new Department();
            $record->name = $fameco;
            $record->faculty_id = 5;
            $record->save();
        }

    }
}
