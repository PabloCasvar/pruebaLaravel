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

Route::get('/personas', function($middleware->onlyAdults(),$middleware->csrf()){

    if(Auth::user()->privilege == 1){
    $personas = DB::table('personas')->get();
    $employes = User::where('status','=','1')->orderBy('id')->paginate('10');

    return json_encode($employes);

    $employes->onFirstPage();

    $employes->nextPage();

    $employes->previousPage();

    $employes->orderBy($order);
    }
});
