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
    return view('home');
});

Route::get('/mytest','TestController@test');

// Route::group(['prefix'=>'admin'],function(){
//     Route::get('users',function(){
//         return 'h:';
//     });
// });
Auth::routes();

Route::get('/home', 'HomeController@index');
