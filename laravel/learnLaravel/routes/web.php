<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "Hello World";
});

// Group routes with prefix 
Route::prefix('details')->group(function () {
    Route::get('about', function () {
        return "This is about page";
    })->name('about.page');

    Route::get('contact', function () {
        return "This is contact page";
    })->name('contact.page');
});

// Route Parameters 
Route::get('student/{id}/{name}', function ($id, $name) {
    return "Student ID: " . $id . ", Name: " . $name;
});
