@extends('admin.layouts.pegawai_app')

@section('title', 'Daftar Pegawai')

@section('content')
    <h1>Daftar Pegawai</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawais as $pegawai)
                    <tr>
                        <td>{{ $pegawai->nama }}</td>
                        <td>{{ $pegawai->jabatan }}</td>
                        <td>{{ $pegawai->email }}</td>
                        <td>{{ $pegawai->telepon }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <@endsection
