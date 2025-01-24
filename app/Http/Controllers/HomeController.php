<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = Books::all();

        return view('home', compact('books'));
    }

    public function show($id)
    {
        // Fetch the book by its ID
        $book = Books::findOrFail($id);

        // Pass the book data to the view
        return view('show', compact('book'));
    }
}
