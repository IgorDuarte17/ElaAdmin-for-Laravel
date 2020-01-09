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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',  'HomeController@index')->name('home');


// Simulação
Route::prefix('/components')->group(function ()
{
    Route::get('ui-buttons', 'ComponentsController@buttons')->name('ui_buttons');
    Route::get('ui-badges', 'ComponentsController@badges')->name('ui_badges');
    Route::get('ui-tabs', 'ComponentsController@tabs')->name('ui_tabs');
    Route::get('ui-cards', 'ComponentsController@cards')->name('ui_cards');
    Route::get('ui-alerts', 'ComponentsController@alerts')->name('ui_alerts');
    Route::get('ui-progressbar', 'ComponentsController@progressbar')->name('ui_progressbar');
    Route::get('ui-modals', 'ComponentsController@modals')->name('ui_modals');
    Route::get('ui-switches', 'ComponentsController@switches')->name('ui_switches');
    Route::get('ui-grids', 'ComponentsController@grids')->name('ui_grids');
    Route::get('ui-typgraphy', 'ComponentsController@typgraphy')->name('ui_typgraphy');
});

Route::prefix('/tables')->group(function ()
{
    Route::get('basic-table', 'TablesController@basic')->name('basic_table');
    Route::get('data-table', 'TablesController@data')->name('data_table');
});

Route::prefix('/forms')->group(function ()
{
    Route::get('basic-form', 'FormsController@basic')->name('basic_form');
    Route::get('advanced-form', 'FormsController@advanced')->name('advanced_form');
});

Route::prefix('/icons')->group(function ()
{
    Route::get('fontawesome', 'IconsController@fontawesome')->name('fontawesome');
    Route::get('themify', 'IconsController@themify')->name('themify');
});

Route::prefix('/widgets')->group(function ()
{
    Route::get('widgets', 'WidgetsController@widgets')->name('widgets');
});

Route::prefix('/charts')->group(function ()
{
    Route::get('chartjs', 'ChartsController@chartjs')->name('chartjs');
    Route::get('flot', 'ChartsController@flot')->name('flot');
    Route::get('peity', 'ChartsController@peity')->name('peity');
});
