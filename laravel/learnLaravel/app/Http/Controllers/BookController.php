<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    function index() {
        return "Hello Book";
    }

    function aboutBook() {
        $private = $this->privateFunction();
        return "About Book - " . $private;
    }

    function privateFunction() {
        return "Private Function";
    }
}
