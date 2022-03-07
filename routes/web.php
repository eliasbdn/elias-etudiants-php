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

        // SUBJECTS
        Route::get('/sujets/ajouter', 'App\Http\Controllers\SubjectController@create');
        Route::post('/sujets/traitement', 'App\Http\Controllers\SubjectController@store');
        Route::get('/sujets/delete/{id}', 'App\Http\Controllers\SubjectController@destroy');

        // SECTIONS
        Route::get('/section/ajouter', 'App\Http\Controllers\SectionController@create');
        Route::post('/section/traitement', 'App\Http\Controllers\SectionController@store');
        Route::get('/section/delete/{id}', 'App\Http\Controllers\SectionController@destroy');
        Route::get('/section/associer/{id}', 'App\Http\Controllers\SectionController@associate');
        Route::post('/section/associer', 'App\Http\Controllers\SectionController@associateform');
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
