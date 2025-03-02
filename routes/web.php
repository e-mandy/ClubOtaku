<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.accueil');
})->name('accueil');

Route::get('/activite', function () {
    return view('pages.activite');
})->name('activite');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

