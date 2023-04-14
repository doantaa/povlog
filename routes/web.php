<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});


Route::get('/catalog', function (){
    return view('catalog', [
        'title' => 'Katalog'
    ]);
});

Route::get('/form', function (){
    return view('form', [
        'title' => 'Form'
    ]);
});

Route::get('/track', function (){
    return view('track', [
        'title' => 'Lacak'
    ]);
});