<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('tasks.index');
});

Route::post('tasks/complete-all', 'TasksController@completeAll');
Route::post('tasks/clear-completed', 'TasksController@clearCompleted');
Route::resource('tasks', 'TasksController');