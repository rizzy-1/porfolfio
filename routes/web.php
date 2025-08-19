<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home', ['title' => 'Home']));
Route::get('/about', fn() => view('about', ['title' => 'About']));
Route::get('/projects', fn() => view('projects', ['title' => 'Projects']));
Route::get('/contact', fn() => view('contact', ['title' => 'Contact']));

