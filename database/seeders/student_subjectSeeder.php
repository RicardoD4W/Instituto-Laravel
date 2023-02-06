<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class student_subjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = Student::all();
        $subjects = Subject::all();

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        //Student::truncate();
        $faker = Faker::create();
        $data = [];
        for ($i = 0; $i < 1; $i++) { // ejecutar el seeder entre 20 y 200 veces 🙂 
            $data[] = [
                'id_student' => $faker->unique()->numberBetween(1, count($students)),
                'id_subject' => $faker->unique()->numberBetween(1, count($subjects)),
                'date_eval' => ($faker->dateTimeBetween('-5 years', '-1 years')),
                'note' => $faker->randomFloat(2,0,10),
            ];
        }
        

        DB::table('students_subjects')->insert($data);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
