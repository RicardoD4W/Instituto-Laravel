<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class students extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        Student::truncate();
        $faker = Faker::create();
        $data = [];
        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'name' => $faker->name,
                'last_name' => $faker->lastName,
                'birth_year' => ($faker->dateTimeBetween('-60 years', '-20 years')),
                'gender' => $faker->randomElement(['M', 'F']),
            ];
        }
        DB::table('students')->insert($data);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

    }
}
