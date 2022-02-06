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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::prefix('doctor')->group(function () {
        Route::name('doctor.')->group(function () {
            Route::controller('Backend\DoctorController')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('add', 'create')->name('add');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('save', 'save')->name('save');
            });
        });
    });
    Route::prefix('chemist')->group(function () {
        Route::name('chemist.')->group(function () {
            Route::controller('Backend\ChemistController')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('add', 'create')->name('add');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('save', 'save')->name('save');
            });
        });
    });
});