<?php

namespace App\Http\Controllers\BookSeller;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class BookSellerController extends Controller
{
    public function dashboard()
    {

        $books = auth()->user()->books;

        return view('dashboard', compact('books'));
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $book = Books::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'price' => $request->price,
            'image' => isset($imagePath) ? $imagePath : null,
            'user_id' => auth()->id()
        ]);

        session()->flash('success', 'Book added successfully!');

        return redirect()->route('book.create');
    }


}
