<?php

namespace App\Http\Controllers\Admin;
use App\Models\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function index(){
        
        $genres = Genre::all();
        // dd($genres);
        return view('admin.genres.index', compact('genres'));
}
public function create()
{
    return view('admin.genres.create');
}

public function store(Request $request)
{
   $data = $request->validate([
       "name" => 'required'
   ]);

   $genres = Genre::find($request->id);

   if ($genres) {
       // Jika entitas ditemukan, itu berarti operasi pembaruan
       $genres->update([
           "name" => $request->name
       ]);
   } else {
       // Jika tidak ditemukan, itu berarti operasi pembuatan baru
       Genre::create($data);
   }

   return redirect()->route('genres.index');
}


public function delete(string $id)
{
    $genres = Genre::find($id);
    $genres->delete();

    return redirect()->route('genres.index');
}

public function edit(string $id)
{
    $genres = Genre::find($id);
    if (!$genres) {
        return redirect()->back();
    }
    return view('admin.genres.edit', compact('genres'));
}

}
