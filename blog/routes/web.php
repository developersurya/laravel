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
Route::get('/page', function () {
    return view('page' );
});
Route::get('/users', function()
{
    return view('users');
});

Route::get('foo', function () {
	return 'Hello World';
});
Route::get('testimonials',function(){
	return view('testimonials');
});
//Route::get('/', 'UserController@show');

Route::get('/new/{name}', function ($name) {
	return view('new', ['name'=>$name] );
});
Route::get('/blog-form',function(){
	return view('blog-form');
});
Route::post('/store-blog', 'BlogController@store');


Route::get('/blogs', 'BlogController@showAll');

Route::get('/Users', 'BlogController@showAll');

Route::get('/login', 'LoginController@index');
Route::post('/login/checklogin', 'LoginController@checklogin');
Route::get('login/successlogin', 'LoginController@successlogin');
Route::get('login/logout', 'LoginController@logout');