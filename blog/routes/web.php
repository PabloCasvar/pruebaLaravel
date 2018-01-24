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


Route::get('/api/gettasks', function(){
    $tasks = DB::table('tasks')->get();

    return $tasks;
});

Route::get('/tasks', function(){
    //$tasks = DB::table('tasks')->get();
    $tasks = App\Task::all();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{id}', function($id){
    //$task = DB::table('tasks')->find($id);
    $task = App\Task::find($id);
    return view('tasks.show', compact('task'));
});
