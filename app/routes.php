<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('hello', 'UserController@Greeting');
Route::get('/', function()
{
	return View::make('hello');
});
Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});
Route::get('user/{id}', 'UserController@showProfile');


Route::get('users0', function()
{
    return 'Users!';
});
Route::get('users0/{id}', 'UserController@getIndex');