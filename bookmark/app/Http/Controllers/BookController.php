<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
    * GET /books
    */
    public function index()
    {

        return view('books.index');
    }

    /**
    * GET a book by id
    */
    public function show()
    {
        return view('books.show');
    }
    //

    public function edit($title = null)
    {
       // dump($title);

        return view('books.edit');
    }
}
