<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        // $positions = DB::select('SELECT * FROM positions');
        $users = User::all();
        // dd($genres);
        return view('admin.user.index', compact('users'));
}
}
