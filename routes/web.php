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

// Route::get('/', function () {
//     return view('horizontal.');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function(){
    return view('welcome');
});
Route::get('/question/add',function(){
    return view('addquestion');
});
Route::get('/question/edit/{id}','EditQuestion@index');
Route::get('/question',function(){
    return view('listquestion');
});