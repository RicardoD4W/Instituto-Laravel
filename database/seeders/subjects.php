<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Subject;



class subjects extends Seeder
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

        Subject::truncate();
        $faker = Faker::create();
        $data = [];
        for ($i = 0; $i < 6; $i++) {
            $data[] = [
                'name' =>$faker->unique(true)->randomElement(['Database', 'Programming', 'Systems', 'FOL', 'Markup Languajes', 'Develop Enviroments']),
                'credits' => $faker->numberBetween(1, 3),
                'hour' => $faker->numberBetween(6, 8)
            ];
        }
        DB::table('subjects')->insert($data);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

    }
}
