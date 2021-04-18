<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Econtroller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{var}', function ($var) {
    return "$var";
});

Route::get('/home', [Econtroller::class, 'home']);
Route::get('/ehome', [Econtroller::class, 'ehome'])->name('ehome');
Route::get('/egaleri', [Econtroller::class, 'egaleri']);

Route::post('/ehome/update', [Econtroller::class, 'update']);