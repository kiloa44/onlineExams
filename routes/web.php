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
Route::get('/', function () {
    return view('welcome');
});


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
