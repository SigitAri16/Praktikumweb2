<?php

namespace App\Http\Controllers\Admin;
use App\Models\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function index(){
        // $positions = DB::select('SELECT * FROM positions');
        $genres = Genre::all();
        // dd($genres);
        return view('admin.genres.index', compact('genres'));
}
}
