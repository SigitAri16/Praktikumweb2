<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{
    public function index(){
        // $positions = DB::select('SELECT * FROM positions');
        $positions = Position::all();
        // dd($positions);
        return view('admin.positions.index', compact('positions'));

    }
}
