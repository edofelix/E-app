<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Econtroller;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class, 'index']);

Route::get('/home', [Econtroller::class, 'home']);
Route::get('/ehome', [Econtroller::class, 'ehome'])->name('ehome');
Route::get('/egaleri', [Econtroller::class, 'egaleri']);

Route::post('/ehome/update', [Econtroller::class, 'update']);
Route::post('/ehome/tambah', [Econtroller::class, 'tambah']);
Route::delete('/ehome/hapus/{id}', [Econtroller::class, 'hapus'])->name('hapusbrg');