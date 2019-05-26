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

Route::get('/', function () {
    return view('welcome');
});
//
Route::get("/userResources",function (){
    return \App\Http\Resources\UserResources::collection(User::all());
});
Route::get("/studentResources",function (){
    return \App\Http\Resources\StudentResources::collection(Student::all());
});
Route::get("/teacherResources",function (){
    return \App\Http\Resources\TeacherResources::collection(Teacher::all());
});

Route::get("/classStudentResources",function (){
    return \App\Http\Resources\ClassStudentsResources::collection(\App\ClassStudent::all());
});
Route::get("/classroomResources",function (){
    return \App\Http\Resources\ClassroomResources::collection(Classroom::all());
});
Route::get("/classSubjectResources",function (){
    return \App\Http\Resources\ClassSubjectResources::collection(\App\ClassSubject::all());
});
Route::get("/subjectResources",function (){
    return \App\Http\Resources\SubjectResources::collection(\App\Subject::all());
});
Route::get("/examResources",function (){
    return \App\Http\Resources\ExamResources::collection(\App\Exam::all());
});
Route::get("/questionResources",function (){
    return \App\Http\Resources\QuestionResources::collection(\App\Question::all());
});
Route::get("/examQuestionResources",function (){
    return \App\Http\Resources\ExamQuestionResources::collection(\App\ExamQuestion::all());
});
Route::get("/teacherSubjectResources",function (){
    return \App\Http\Resources\TeacherSubjectResources::collection(\App\TeacherSubject::all());
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





Auth::routes();
//Route::resource("/question",'QuestionController@store');
