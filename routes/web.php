<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // Passo dati dinamicamente alla vista
    $home_text = 'Welcome to the home page!';

    return view('home', compact('home_text'));
})->name('home');

Route::get('/about', function () {

    // Passo dati dinamicamente alla vista
    $about_text = 'Welcome to the about page!';

    return view('about', compact('about_text'));
})->name('about');

Route::get('/contacts', function () {

    // Passo dati dinamicamente alla vista
    $contacts_text = 'Welcome to the contact page!';

    return view('contacts', compact('contacts_text'));
})->name('contacts');