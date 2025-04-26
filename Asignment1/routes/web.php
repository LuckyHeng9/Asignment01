<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});
Route::get('/menu', function () {
    return view('menu');
});

Route::get('/about', function () {
    return view('about'); 
});

Route::get('/booktable', function () {
    return view('booktable'); 
});