<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Routes for Plans
Route::get('/plans', 'App\Http\Controllers\PlanController@index')->name('plans.index');
Route::get('/plans/create', 'App\Http\Controllers\PlanController@create')->name('plans.create');
Route::post('/plans', 'App\Http\Controllers\PlanController@store')->name('plans.store');
Route::get('/plans/{plan}/edit', 'App\Http\Controllers\PlanController@edit')->name('plans.edit');
Route::put('/plans/{plan}', 'App\Http\Controllers\PlanController@update')->name('plans.update');
Route::delete('/plans/{plan}', 'App\Http\Controllers\PlanController@destroy')->name('plans.destroy');

// Routes for ComboPlans
Route::get('/combo-plans', 'App\Http\Controllers\ComboPlanController@index')->name('combo_plans.index');
Route::get('/combo-plans/create', 'App\Http\Controllers\ComboPlanController@create')->name('combo_plans.create');
Route::post('/combo-plans', 'App\Http\Controllers\ComboPlanController@store')->name('combo_plans.store');
Route::get('/combo-plans/{comboPlan}/edit', 'App\Http\Controllers\ComboPlanController@edit')->name('combo_plans.edit');
Route::put('/combo-plans/{comboPlan}', 'App\Http\Controllers\ComboPlanController@update')->name('combo_plans.update');
Route::delete('/combo-plans/{comboPlan}', 'App\Http\Controllers\ComboPlanController@destroy')->name('combo_plans.destroy');

// Routes for EligibilityCriteria
Route::get('/eligibility-criteria', 'App\Http\Controllers\EligibilityCriteriaController@index')->name('eligibility_criteria.index');
Route::get('/eligibility-criteria/create', 'App\Http\Controllers\EligibilityCriteriaController@create')->name('eligibility_criteria.create');
Route::post('/eligibility-criteria', 'App\Http\Controllers\EligibilityCriteriaController@store')->name('eligibility_criteria.store');
Route::get('/eligibility-criteria/{eligibilityCriteria}/edit', 'App\Http\Controllers\EligibilityCriteriaController@edit')->name('eligibility_criteria.edit');
Route::put('/eligibility-criteria/{eligibilityCriteria}', 'App\Http\Controllers\EligibilityCriteriaController@update')->name('eligibility_criteria.update');
Route::delete('/eligibility-criteria/{eligibilityCriteria}', 'App\Http\Controllers\EligibilityCriteriaController@destroy')->name('eligibility_criteria.destroy');