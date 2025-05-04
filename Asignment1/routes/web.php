<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
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

Route::get('/show-feature', [FeatureController::class, 'show'])->name('features.show');

Route::get('/admin', [FeatureController::class, 'index'])->name('features.index');


// Feature CRUD routes
Route::resource('features', FeatureController::class);
