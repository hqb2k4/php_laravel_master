<?php

use App\Http\Controllers\BookController;
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

// Route Fallback
Route::fallback(function () {
    return "The page you are looking for does not exist. <a href='/'>Go to Home</a>";
});

//Route->view
//  Passing Data from Route to View
Route::get('about-us/{name}/{age}', function ($name, $age) {
    // $name = "Hoang Quoc Bao";
    // $age = 22;
    // Passing Data from Route to View using with() method
    // return view('aboutus')->with(['name' => $name, 'age' => $age]);

    // Passing Data from Route to View using compact() method
    // return view('aboutus', compact('name', 'age'));

    // Passing Data from Route to View 
    return view('aboutus', compact('name', 'age'));
});

// Route::view('contact-us', 'contactus');
Route::view('contact-us/{name}/{age}', 'contactus');

// Route to Controller
Route::get('books',[BookController::class, 'index']);

