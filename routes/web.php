<?php

use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware'=>'auth'],
    function(){

        // STUDENTS
        Route::get('/etudiant/ajouter', 'App\Http\Controllers\StudentController@create');
        Route::post('/etudiant/traitement', 'App\Http\Controllers\StudentController@store');
        Route::get('/etudiant/delete/{id}', 'App\Http\Controllers\StudentController@destroy');
        Route::get('/etudiant/modifier/{id}', 'App\Http\Controllers\StudentController@edit');
        Route::post('/etudiant/modifier-autorise', 'App\Http\Controllers\StudentController@update');

        // SUBJECTS
        Route::get('/sujet/ajouter', 'App\Http\Controllers\SubjectController@create');
        Route::post('/sujets/traitement', 'App\Http\Controllers\SubjectController@store');
        Route::get('/sujets/delete/{id}', 'App\Http\Controllers\SubjectController@destroy');
        Route::get('/sujet/modifier/{id}', 'App\Http\Controllers\SubjectController@edit');
        Route::post('/sujet/modifier-autorise', 'App\Http\Controllers\SubjectController@update');

        // SECTIONS
        Route::get('/section/ajouter', 'App\Http\Controllers\SectionController@create');
        Route::post('/section/traitement', 'App\Http\Controllers\SectionController@store');
        Route::get('/section/delete/{id}', 'App\Http\Controllers\SectionController@destroy');
        Route::get('/section/associer/{id}', 'App\Http\Controllers\SectionController@associate');
        Route::post('/section/associer', 'App\Http\Controllers\SectionController@associateform');
        Route::get('/section/modifier/{id}', 'App\Http\Controllers\SectionController@edit');
        Route::post('/section/modifier-autorise', 'App\Http\Controllers\SectionController@update');

        // PROGRAMS
        Route::get('/programme/ajouter', 'App\Http\Controllers\ProgramController@create');
        Route::post('/programme/traitement', 'App\Http\Controllers\ProgramController@store');
        Route::get('/programme/delete/{id}', 'App\Http\Controllers\ProgramController@destroy');
        Route::get('/programme/associer/{id}', 'App\Http\Controllers\ProgramController@associate');
        Route::post('/programme/associer', 'App\Http\Controllers\ProgramController@associateform');
        Route::get('/programme/modifier/{id}', 'App\Http\Controllers\ProgramController@edit');
        Route::post('/programme/modifier-autorise', 'App\Http\Controllers\ProgramController@update');
    });


// STUDENTS
Route::get('/etudiants/liste', 'App\Http\Controllers\StudentController@index');
Route::get('/etudiant/{id}', 'App\Http\Controllers\StudentController@show');

// SUBJECTS
Route::get('/sujets/liste', 'App\Http\Controllers\SubjectController@index');
Route::get('/sujets/{id}', 'App\Http\Controllers\SubjectController@show');

// SECTIONS
Route::get('/sections/liste', 'App\Http\Controllers\SectionController@index');
Route::get('/section/{id}', 'App\Http\Controllers\SectionController@show');

// PROGRAMS
Route::get('/programmes/liste', 'App\Http\Controllers\ProgramController@index');
Route::get('/programmes/{id}', 'App\Http\Controllers\ProgramController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
