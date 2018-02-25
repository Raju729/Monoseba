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

//Route::get('/', function () {
//    return view('Admin.homecontent');
//});
Route::get('/dashboard', function () {
    return view('User.user_homecontent');
});

Route::get('admin-login','AdminController@login');

Auth::routes();

Route::get('/admin', 'HomeController@index');