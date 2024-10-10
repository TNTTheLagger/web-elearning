<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tesztek', [App\Http\Controllers\TestController::class, 'showForm'])->name('tesztek.form');
Route::post('/tesztek', [App\Http\Controllers\TestController::class, 'handleForm'])->name('tesztek.handle');
Route::get('/tesztek/matematika', [App\Http\Controllers\TestController::class, 'showMatematika'])->name('tesztek.matematika');
Route::get('/tesztek/informatika', [App\Http\Controllers\TestController::class, 'showInformatika'])->name('tesztek.informatika');
