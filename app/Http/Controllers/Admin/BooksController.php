<?php

namespace App\Http\Controllers\Admin;
use App\Models\Book;
use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        // $positions = DB::select('SELECT * FROM positions');
        $books = Book::all();
        // dd($genres);
        return view('admin.books.index', compact('books'));
}
public function create()
{
    {$genres = Genre::all(); // Mengambil semua data genres dari database
        return view('admin.books.create', compact('genres'));}
    return view('admin.books.create');
}

public function store(Request $request)
{
   $data = $request->validate([
       "title" => 'required',
       "isbn" => 'required',
       "deskripsi" => 'required',
       "penulis" => 'required',
       "penerbit" => 'required',
       "cover_img" => 'required',
       "genres_id" => 'required',
   ]);
   $books = Book::find($request->id);

   if ($books) {
       // Jika entitas ditemukan, itu berarti operasi pembaruan
       $books->update([
           "title" => $request->title,
           "isbn" => $request->isbn,
           "deskripsi" => $request->deskripsi,
           "penulis" => $request->penulis,
           "penerbit" => $request->penerbit,
           "cover_img" => $request->cover_img,
           "genres_id" => $request->genres_id,
       ]);
   } else {
       // Jika tidak ditemukan, itu berarti operasi pembuatan baru
       Book::create($data);
   }

   return redirect()->route('books.index');
}

   


public function delete(string $id)
{
    $books = Book::find($id);
    $books->delete();

    return redirect()->route('books.index');
}

public function edit($id)
{
    $book = Book::findOrFail($id);
    $genres = Genre::all();
    return view('admin.books.edit', compact('book', 'genres'));
}

}

