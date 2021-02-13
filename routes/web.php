<?php

use Faker\Guesser\Name;
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

Route::resources([
    'member'=>'MemberController',
]);
// Route::get('show', 'MemberController@show')->name('show');
// Route::get('create', 'MemberController@create')->name('create');

// Route::post('store', 'MemberController@store')->name('store');
// Route::get('edit/{id}', 'MemberController@edit')->name('edit');
