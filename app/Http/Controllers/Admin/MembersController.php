<?php

namespace App\Http\Controllers\Admin;
use App\Models\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index(){
        // $positions = DB::select('SELECT * FROM positions');
        $members = Member::all();
        // dd($genres);
        return view('admin.members.index', compact('members'));
}
}
