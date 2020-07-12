<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;


class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $new_student = new Student();
            $new_student->firstname = $faker->word;
            $new_student->lastname = $faker->word;
            $new_student->sex = $faker->randomElement(['M','F']); 

            $new_student->sr_num = $faker->randomNumber(5, true);
            $new_student->email = $faker->email;
            $new_student->save();
        }
    }
}