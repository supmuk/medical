<?php

use Illuminate\Support\Facades\Route;

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('storage:link');
});

Route::any('/', 'IndexController@home')->name('index');
Route::any('about', 'IndexController@about')->name('about');
Route::any('contact', 'IndexController@contact')->name('contact');
Route::any('products', 'IndexController@products')->name('products');
Route::any('privacy-policy', 'IndexController@privacyPolicy')->name('privacy-policy');
Route::any('term-condition', 'IndexController@termCondition')->name('term-condition');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Only Authenticated User Can Access Below Routes

Route::middleware('auth')->group(function () {
    Route::prefix('doctor')->group(function () {
        Route::name('doctor.')->group(function () {
            Route::controller('Backend\DoctorController')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('add', 'create')->name('add');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('save', 'save')->name('save');
                Route::delete('delete', 'delete')->name('delete');
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
                Route::delete('delete', 'delete')->name('delete');
            });
        });
    });
    Route::prefix('employee')->group(function () {
        Route::name('employee.')->group(function () {
            Route::controller('Backend\EmployeeController')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('save', 'save')->name('save');
                Route::delete('employee-delete', 'employeeDelete')->name('employee-delete');

                Route::get('daily-call-report-index', 'dailyCallReportIndex')->name('daily-call-report-index');
                Route::get('daily-call-report/{id?}', 'dailyCallReport')->name('daily-call-report');
                Route::post('daily-call-report-save', 'dailyCallReportSave')->name('daily-call-report-save');
                Route::delete('daily-call-report-delete', 'dailyCallReportDelete')->name('daily-call-report-delete');

                Route::get('tour-program-index', 'tourProgramIndex')->name('tour-program-index');
                Route::get('tour-program/{id?}', 'tourProgram')->name('tour-program');
                Route::post('tour-program-save', 'tourProgramSave')->name('tour-program-save');
                Route::delete('tour-program-delete', 'tourProgramDelete')->name('tour-program-delete');
                
                Route::get('standard-fare-chart-index', 'standardFareChartIndex')->name('standard-fare-chart-index');
                Route::get('standard-fare-chart-edit/{id}', 'standardFareChartEdit')->name('standard-fare-chart-edit');
                Route::get('standard-fare-chart', 'standardFareChart')->name('standard-fare-chart');
                Route::post('standard-fare-chart-save', 'standardFareChartSave')->name('standard-fare-chart-save');
                Route::delete('standard-fare-chart-delete', 'standardFareChartDelete')->name('standard-fare-chart-delete');

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
                Route::delete('delete', 'delete')->name('delete');
            }); 
        });
    });
    
    Route::prefix('place-of-working')->group(function () {
        Route::name('place-of-working.')->group(function () {
            Route::controller('Backend\placeOfWorkingController')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('save', 'save')->name('save');
                Route::delete('delete', 'delete')->name('delete');
            }); 
        });
    });

    Route::prefix('product')->group(function () {
        Route::name('product.')->group(function () {
            Route::controller('Backend\ProductController')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('save', 'save')->name('save');
                Route::any('list-of-product', 'listOfProduct')->name('list-of-product');
                Route::delete('delete', 'delete')->name('delete');
            }); 
        });
    });

    Route::prefix('pages')->group(function() {
        Route::name('pages.')->group(function () {
            Route::controller('Backend\PageController')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('save', 'save')->name('save');
            });
        });
    });
});

Route::any('headquarter', 'Backend\HeadquarterController@listOfHeadquarter')->name('list-of-headquarter');
Route::any('place', 'Backend\placeOfWorkingController@listOfPlace')->name('list-of-place');
Route::any('verified-registered-employee', 'Backend\EmployeeController@verifiedRegisteredEmployee')->name('verified-registered-employee');
Route::any('doctor-list', 'Backend\DoctorController@doctorList')->name('doctor-list');
Route::any('chemist-list', 'Backend\ChemistController@chemistList')->name('chemist-list');

// Edit Profile
Route::get('edit-profile', 'Backend\EmployeeController@editProfile')->name('edit-profile');
Route::post('edit-profile-save', 'Backend\EmployeeController@editProfileSave')->name('edit-profile-save');
