<?php

use \Illuminate\Support\Facades\Route; // q 2 с этим "работает", но почему не было прописано? (C:\Dev\laravel.loc\vendor\laravel\framework\src\Illuminate\Support\Facades\Route.php)

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

Route::get('/id{id}',function ($id){ // Q 1 Откуда он берет класс Route?
    return $id;
});

