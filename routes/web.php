<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // Passo dati dinamicamente alla vista
    $home_text = 'Welcome to the home page!';

    return view('home', compact('home_text'));
});

Route::get('/about', function () {

    // Passo dati dinamicamente alla vista
    $about_text = 'Welcome to the about page!';

    return view('about', compact('about_text'));
});

Route::get('/contact', function () {

    // Passo dati dinamicamente alla vista
    $contact_text = 'Welcome to the contact page!';

    return view('contact', compact('contact_text'));
});