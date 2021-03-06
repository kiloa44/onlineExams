<?php

use Illuminate\Database\Seeder;

class IntialValue extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Guardian::class,5)->create();
        factory(\App\Classroom::class,5)->create();
        factory(\App\Student::class,5)->create();
        factory(\App\Teacher::class,5)->create();
        factory(\App\Subject::class,5)->create();
        //factory(\App\TeacherSubject::class,5)->create();
        //factory(\App\ClassStudent::class,5)->create();
        factory(\App\Question::class,5)->create();
        //factory(\App\ClassSubject::class,10)->create();
        factory(\App\Exam::class,5)->create();
        factory(\App\Certification::class,5)->create();
        //factory(\App\ExamQuestion::class,25)->create();


//        factory(\App\Teacher::class,5)->create();
//        factory(\App\Subject::class,5)->create();
//        factory(\App\Question::class,10)->create();
//        factory(\App\Exam::class,5)->create();
//        factory(\App\ClassStudent::class,5)->create();
//        factory(\App\ClassSubject::class,5)->create();
//        factory(\App\ExamQuestion::class,6)->create();
//        factory(\App\TeacherSubject::class,7)->create();

    }
}
