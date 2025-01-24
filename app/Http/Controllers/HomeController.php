<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all books
        $books = Books::all(); // You can customize the query if you want to filter books

        return view('home', compact('books'));
    }
}
