<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Dashboard";
        $name = "Tgz";
        $nim = "0110223181";
        $dataPribadi = [
            [
                'nama' => $name,
                'nim' => $nim
            ],
            [
                'nama' => "Bon-chan",
                'nim' => 1245627
            ]
        ];
        return view('dashboard.index', [
            'titles' => "Dashboard",
            'dataPribadi' => $dataPribadi
        ]);
    }
            
    public function laporan()
    {
        $title = "Laporan Program Studi";
        $tahun = 2024;
        $data_mhs = [
            ["prodi" => "SI", "jumlah" => 1020],
            ["prodi" => "TI", "jumlah" => 1215],
            ["prodi" => "BD", "jumlah" => 62]
        ];

        return view('dashboard.laporan', compact('title', 'tahun', 'data_mhs'));
    }
    public function pegawai()
{
    // Data contoh pegawai
    $pegawais = [
        (object) ['nama' => 'Andi'],
        (object) ['nama' => 'Budi'],
        (object) ['nama' => 'Cici'],
    ];

    // Debugging data pegawai
    dd($pegawais);

    // Mengirim data pegawai ke view 'pegawai.index'
    return view('pegawai.index', compact('pegawais'));
}


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
