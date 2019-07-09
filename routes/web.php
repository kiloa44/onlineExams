<?php

use App\Classroom;
use App\User;
use App\Subject;
use App\Teacher;
use App\Student;
use App\Exam;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
//Welcome
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    $subjects = Subject::all();
    $students= Student::all();
    foreach ($subjects as $subject){
        $subject->classrooms()->attach(Classroom::inRandomOrder()->first()->id);
    }
    foreach ($students as $student){
        $student->classrooms()->attach(Classroom::inRandomOrder()->first()->id);
    }
    $exams = Exam::all();
    foreach ($exams as $exam){
        $exam->class_subject_id = \App\ClassSubject::inRandomOrder()->first()->id;
        $exam->save();
        $exam->questions()->attach(\App\Question::inRandomOrder()->first()->id);
    }
//    return view('welcome');
});


Route::get('exam/{id}',"ExamController@getExam")->name('exam');
//Group
Route::resource('subjects','SubjectController');


//Student
Route::resource('students','StudentController');



//Teacher
Route::resource('teachers','TeacherController');


//Question
Route::resource('questions','QuestionController');



//Exam
Route::resource('exams','ExamController');


//Certification
Route::resource('certifications','CertificationController');


//Exam
Route::resource('users','UserController');



//Role
Route::get('/roles',function (){
    return view('roles');
})->name('roles');

//General Show
Route::get('/generalShow',function(){
    $students = Student::all();
    $subjects = Subject::all();
    $classrooms = Classroom::all();
    return view("generalShow")
        ->with(compact('students'))
        ->with(compact('classrooms'))
        ->with(compact('subjects'));
})->name('generalShow');




//Mark
Route::get('/marks',function(){
    return view("marks");
});


//Report
Route::get('/reports',function(){
    return view("reports");
})->name('reports');




Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/home', function () {
        return view('index');
    })->name("home");


});


//
//Route::get("/long/url/to/test/stuff",array("as"=>"what.I.want",function(){
//    $EasyToUseUrl = route("what.I.want");
//    return "whatever hahahah ".$EasyToUseUrl;
//}));
//



//Route::get('/home', 'HomeController@index')->name('home');
//Route::get("/question",'QuestionController@index');
//Route::post("/question",'QuestionController@store');
Route::get("/createClassroom",function (){
    $classrooms = factory(App\Classroom::class,2)->create()->each(function ($classroom){
        $classroom->students()->save(factory(App\Student::class,2)->make());
    }
    );
    foreach ($classrooms as $classroom){
        echo $classroom->name."<br>";
    }
});

Route::get("/classroom/{id}",function ($id){
    return Classroom::find($id);
});

Route::get("/create",function (){
    $students = factory(App\Student::class)
        ->create()
        ->each(function ($student) {
            $student->save(factory(App\Student::class)->make());
        });
});





//Route::resource("/question",'QuestionController@store');
