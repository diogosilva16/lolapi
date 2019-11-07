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

/**
 * Unauthenticated Routes
 */
Route::get('/', 'MainController@index')->name('index');

Route::get('/champlist', 'MainController@champlist')->name('champlist');

Route::get('/insert-champion', 'MainController@form')->name('insert-form');
Route::post('/insert-champion', 'MainController@insert')->name('insert-champion');

Route::get('/add-skill', 'ChampionSkillController@skillform')->name('skill-form');
Route::post('/add-skill', 'ChampionSkillController@store')->name('add-skill');

Route::get('/add-skin', 'ChampionSkinsController@skinform')->name('skin-form');
Route::post('/add-skin', 'ChampionSkinsController@store')->name('add-skin');

Route::name('web.')->group(function () {
    Route::resource('champion', 'EditChampionController');
    Route::resource('championSkill', 'EditSkillController');
    Route::resource('championSkin', 'EditSkinsController');
});

/**
 *  Auth & Registration
 */
Auth::routes();

/**
 * Authenticated only Routes
 */
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Backoffice Routes
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Backoffice', 'middleware' => ['auth', 'role:admin|manager']],
    function () {
        Route::get('/', 'DashboardController@index')->name('admin');

        Route::resource('user', 'UserController');
    }
);