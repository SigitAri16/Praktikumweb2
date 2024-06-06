@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ isset($employee) ? 'Edit Employee' : 'Tambah Employee' }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ isset($employee) ? 'Edit Employee' : 'Tambah Employee' }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="{{ route('employee.index') }}" class="btn btn-success btn-sm">Kembali</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('employee.store') }}" method="POST">
                                @csrf
                                @if(isset($employee))
                                    <input type="hidden" name="id" value="{{ $employee->id }}">
                                @endif
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control col-md-8" value="{{ old('nama', $employee->nama ?? '') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $employee->alamat ?? '') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="nohp">Telepon</label>
                                    <input type="text" class="form-control" id="nohp" name="nohp" value="{{ old('nohp', $employee->nohp ?? '') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $employee->email ?? '') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="posisi_id">Jabatan</label>
                                    <select class="form-control" id="posisi_id" name="positions_id" required>
                                        @foreach ($positions as $position)
                                            <option value="{{ $position->id }}" {{ (old('positions_id') == $position->id || (isset($employee) && $employee->positions_id == $position->id)) ? 'selected' : '' }}>
                                                {{ $position->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="submit" value="{{ isset($employee) ? 'Update' : 'Tambah' }}" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection