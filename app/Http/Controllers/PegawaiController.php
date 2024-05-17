<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        // Data contoh pegawai beserta jabatan, email, dan nomor telepon
        $pegawais = [
            (object) ['nama' => 'TGZ', 'jabatan' => 'Manager', 'email' => 'tgz@gmail.com', 'telepon' => '0812-4567-7805'],
            (object) ['nama' => 'Marik', 'jabatan' => 'Staff', 'email' => 'marik@gmail.com', 'telepon' => '0822-6546-3219'],
            (object) ['nama' => 'Chelsi', 'jabatan' => 'Supervisor', 'email' => 'chelsi@gmail.com', 'telepon' => '021-5591-5550'],
            
        ];

        // Mengirim data pegawai ke view 'pegawai.index'
        return view('pegawai.index', compact('pegawais'));
    }
}
