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

    $name = 'Pablo';
    $tasks = [
        'Actividad 1', 
        'Actividad 2', 
        'Actividad 3'
    ];

    $tasksdb = DB::table('tasks')->get();

    return view('welcome', compact('name', 'tasks', 'tasksdb'));
});


Route::get('/api/tasks', function(){
    return App\Task::all();
});

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{id}', 'TasksController@show');
