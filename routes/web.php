<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\cor;
use App\Http\Controllers\myc;
use App\Http\Controllers\cro;

Route::get('/', function () {
    return view('index');
});

Route::get('/i', function () {
    return view('index');
});
Route::get('/ins', function () {
    return view('insert');
});

Route::post("pro",[cro::class,'product']);
Route::get("show",[cro::class,'show']);
Route::get("delete/{id}",[cro::class,'dele']);
Route::get("update/{id}",[cro::class,'upin']);
Route::post('upp',[cro::class,'upshow']);
Route::get('/',[cro::class,'webshow']);
Route::get("shop/{id}",[cro::class,'cart']);
Route::get("search",[cro::class,'search']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ins', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
