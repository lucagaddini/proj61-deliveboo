<?php

use Illuminate\Database\Seeder;
use App\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            'Antipasti',
            'Primi',
            'Secondi',
            'Contorni',
            'Desserts',
            'Sushi',
        ];

        foreach ($courses as $course) {
            $new_course = new Course();
            $new_course->type = $course;
            $new_course->save();
        }
    }
}
