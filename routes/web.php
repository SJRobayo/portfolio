<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('foodieguard', function () {
    return view('foodieguard');
})->name('foodieguard');

Route::get('meteorological-predictor', function () {
    return view('meteorological-predictor');
})->name('meteorological-predictor');


Route::get('optimal-route-caluclator', function () {
    return view('optimal-route-caluclator');
})->name('optimal-route-caluclator');

Route::get('experience', function () {
    return view('experience');
})->name('experience');


Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('contact', function () {
    return view('contact');
})->name('contact');


Route::get('about', function () {
    return view('about');
})->name('about');
// Route::get('/', Home::class)->name('home');


Route::get('/lang/{key}', function ($key) {
    session()->put('locale', $key);
    return redirect()->back();
});
