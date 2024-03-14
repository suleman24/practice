<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = collect(
           [
            [
                'name'=>'Ali',
                'email' =>'al@gmail.com',
            ],
            [
                'name'=>'Anwar',
                'email' =>'aa@gmail.com',
            ],
            [
                'name'=>'Bilal',
                'email' =>'bb@gmail.com',
            ],
           ]
        );

        $students->each(function($student){
            student::insert($student);

        });

        // student::create([
        //     'name'=>'Suleman',
        //     'email' =>'ss@gmail.com',
        // ]);
    }
}
