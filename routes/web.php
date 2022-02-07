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
    Route::prefix('employee')->group(function () {
        Route::name('employee.')->group(function () {
            Route::controller('Backend\EmployeeController')->group(function () {
                Route::get('index', 'index')->name('index');

                Route::get('daily-call-report', 'dailyCallReport')->name('daily-call-report');
                Route::post('daily-call-report-save', 'dailyCallReportSave')->name('daily-call-report-save');

                Route::get('tour-program', 'tourProgram')->name('tour-program');
                Route::post('tour-program-save', 'tourProgramSave')->name('tour-program-save');
                
                Route::get('standard-fare-chart-index', 'standardFareChartIndex')->name('standard-fare-chart-index');
                Route::get('standard-fare-chart-edit/{id}', 'standardFareChartEdit')->name('standard-fare-chart-edit');
                Route::get('standard-fare-chart', 'standardFareChart')->name('standard-fare-chart');
                Route::post('standard-fare-chart-save', 'standardFareChartSave')->name('standard-fare-chart-save');
            });
        });
    });

    Route::prefix('headquarter')->group(function () {
        Route::name('headquarter.')->group(function () {
            Route::controller('Backend\HeadquarterController')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('save', 'save')->name('save');
                // Route::post('update/{id}', 'save')->name('save');
            }); 
        });
    });   
});