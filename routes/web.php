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

// Example Routes
Route::view('/', 'landing')->middleware('auth');
Route::view('home', 'dashboard')->middleware('auth');
Route::resource('users', 'UserController')->middleware('auth');



Auth::routes();


// Route::match(['get', 'post'], '/dashboard', function(){
//     return view('dashboard');
// });

// Route::view('/examples/plugin-helper', 'examples.plugin_helper');
// Route::view('/examples/plugin-init', 'examples.plugin_init');
// Route::view('/examples/blank', 'examples.blank');
