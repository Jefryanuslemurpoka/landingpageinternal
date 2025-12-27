<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Landing Page Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'landing.index')->name('landing');

Route::view('/contact', 'landing.sections.contact')
    ->name('landing.contact');
