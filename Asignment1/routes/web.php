<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('page.home');
});
Route::get('/menu', function () {
    return view('page.menu');
});

Route::get('/about', function () {
    return view('page.about'); 
});

Route::get('/booktable', function () {
    return view('page.booktable'); 
});