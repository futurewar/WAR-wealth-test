<?php

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

Route::get('budget', 'BudgetController@show');
Route::patch('budget', 'BudgetController@update');

Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about');
Route::get('/framework', 'PagesController@framework');
Route::get('/value', 'PagesController@value');
Route::get('/philosophy', 'PagesController@philosophy');
Route::get('/survey', 'PagesController@survey');
Route::get('/results', 'PagesController@results');
Route::get('/journey', 'PagesController@journey');

Route::get('/journey', 'JourneyController@journey');
Route::get('/create', 'JourneyController@create');
Route::get('/live', 'JourneyController@live');
Route::get('/save', 'JourneyController@save');
Route::get('/share', 'JourneyController@share');
Route::get('/plan', 'JourneyController@plan');
Route::get('/saveActivity', 'JourneyController@saveActivity');
Route::get('/saveResults', 'JourneyController@saveResults');
Route::get('/balanced', 'JourneyController@balanced');
Route::get('/aggressive', 'JourneyController@aggressive');

Route::resource('surveys', 'SurveysController');

