<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    function index() {
        return "Hello Book";
    }

    function aboutBook() {
        return "About Book";
    }
}
