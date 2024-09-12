<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('pages.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'years' => 'required|integer',
            'slugs' => 'required|unique:books,slugs',
            'author' => 'required',
        ]);

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id); // Fetch the book by ID or throw a 404 if not found
        return view('pages.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $book = Book::find($id);
    $book->name = $request->input('name');
    $book->years = $request->input('years');
    $book->slugs = $request->input('slugs');
    $book->author = $request->input('author');
    // Update other fields as needed
    $book->save();

    return redirect()->route('books.index')->with('success', 'Book updated successfully');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($book)
    {
        $book = Book::findOrFail($book); // This will retrieve the model instance or throw a 404 error

        // Now you can safely delete the book
        $book->delete();

        // Redirect to the books page with success message
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
