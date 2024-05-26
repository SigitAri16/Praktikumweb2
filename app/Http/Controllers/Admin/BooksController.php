<?php

namespace App\Http\Controllers\Admin;
use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        // $positions = DB::select('SELECT * FROM positions');
        $books = Book::all();
        // dd($genres);
        return view('admin.books.index', compact('books'));
}
}
