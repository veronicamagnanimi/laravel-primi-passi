<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $welcome = 'Welcome to Laravel 8!';
    return view('home', compact('welcome'));
})->name('home');


Route::get('/about', function () {
    $about = 'Here you can learn more about us!';
    return view('about', compact('about'));
})->name('about');

Route::get('/contacts', function () {
    $contacts = 'Here you can contact us!';
    return view('contacts', compact('contacts'));
})->name('contacts');