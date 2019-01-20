<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Services\BookService;
use App\Gender;
use App\Publisher;
use App\Tag;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders = Gender::all();
        $publishers = Publisher::all();
        $tags = Tag::all();

        return view('books.create', compact('genders', 'publishers', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO validate the rest of the fields
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'isbn_13' => 'required',
            'isbn_10' => 'required',
        ]);

        try {
            $this->bookService->store($request);
        } catch (ModelNotFoundException $e) {
            flash('Erro! Livro não inserido.')->error();

            return back()->withError($e->getMessage())->withInput();
        }

        flash('Livro inserido com sucesso.')->success();

        return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $genders = Gender::all();
        $publishers = Publisher::all();
        $tags = Tag::all();

        return view('books.edit', compact('book', 'publishers', 'genders', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        // TODO validate the rest of the fields
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'isbn_13' => 'required',
            'isbn_10' => 'required',
        ]);

        try {
            $this->bookService->update($request, $book);
        } catch (ModelNotFoundException $e) {
            flash('Erro! Livro não alterado.')->error();

            return back()->withError($e->getMessage())->withInput();
        }

        flash('Livro alterado com sucesso.')->success();

        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
