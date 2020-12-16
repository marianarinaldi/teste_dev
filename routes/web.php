<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/curso/novo', "App\Http\Controllers\CourseController@create");
Route::post('/curso/novo', "App\Http\Controllers\CourseController@store")->name('create_course');
Route::get('/curso/ver/{id}', "App\Http\Controllers\CourseController@show");
Route::get('/curso/editar/{id}', "App\Http\Controllers\CourseController@edit");
Route::post('/curso/editar/{id}', "App\Http\Controllers\CourseController@update")->name('edit_course');
Route::get('/curso/editar/{id}', "App\Http\Controllers\CourseController@edit");

Route::get('/aluno/novo', "App\Http\Controllers\StudentController@create");
Route::post('/aluno/novo', "App\Http\Controllers\StudentController@store")->name('create_student');
Route::get('/aluno/ver/{id}', "App\Http\Controllers\StudentController@show");
Route::get('/aluno/editar/{id}', "App\Http\Controllers\StudentController@edit");
Route::post('/aluno/editar/{id}', "App\Http\Controllers\StudentController@update")->name('edit_student');
Route::get('/aluno/editar/{id}', "App\Http\Controllers\StudentController@edit");

Route::get('/matricula/novo', "App\Http\Controllers\EnrollmentController@create");
Route::post('/matricula/novo', "App\Http\Controllers\EnrollmentController@store")->name('create_enrollment');
Route::get('/matricula/ver/{id}', "App\Http\Controllers\EnrollmentController@show");
Route::get('/matricula/editar/{id}', "App\Http\Controllers\EnrollmentController@edit");
Route::post('/matricula/editar/{id}', "App\Http\Controllers\EnrollmentController@update")->name('edit_enrollment');
Route::get('/matricula/editar/{id}', "App\Http\Controllers\EnrollmentController@edit");