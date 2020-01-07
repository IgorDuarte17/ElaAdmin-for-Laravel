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
