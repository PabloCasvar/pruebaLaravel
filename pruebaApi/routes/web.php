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
    return view('welcome');
});

Route::get('/personas', function(){
    
    $personas = DB::table('personas')->get();
    return json_encode($personas);

    /*if(Auth::user()->privilege == 1){
    $employes = User::where('status','=','1')->orderBy('id')->paginate('10');
    $employes->onFirstPage();
    $employes->nextPage();
    $employes->previousPage();
    $employes->orderBy($order);
    }*/

});
