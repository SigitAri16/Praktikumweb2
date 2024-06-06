<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
{
    $employees = Employee::all();
    $positions = Position::all();
    return view('admin.employees.index', compact('employees', 'positions'));
}

    

public function create()
    {
        $positions = Position::all();
        return view('admin.employees.create', compact('positions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'nohp' => 'required',
            'email' => 'required',
            'positions_id' => 'required|exists:positions,id',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function edit($id)
    {
        $employees = Employee::findOrFail($id);
        $positions = Position::all();
        return view('admin.employees.edit', compact('employee', 'positions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'nohp' => 'required',
            'email' => 'required',
            'positions_id' => 'required|exists:positions,id',
        ]);

        $employees = Employee::findOrFail($id);
        $employees->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Pegawai berhasil diperbarui');
    }

    public function destroy($id)
    {
        $employees = Employee::findOrFail($id);
        $employees->delete();

        return redirect()->route('employees.index')->with('success', 'Pegawai berhasil dihapus');
    }
}
