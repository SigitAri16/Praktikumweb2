@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Buku</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Buku</li>
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
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="{{ route('books.index') }}" class="btn btn-success btn-sm">Kembali</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('books.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $book->id }}">
                                <div class="form-group row">
                                    <label for="title" class="col-md-4">Judul Buku</label>
                                    <input type="text" name="title" id="title" class="form-control col-md-4" value="{{ $book->title }}" required>
                                </div>
                                <div class="form-group row">
                                    <label for="isbn" class="col-md-4">ISBN</label>
                                    <input type="text" name="isbn" id="isbn" class="form-control col-md-4" value="{{ $book->isbn }}" required>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-md-4">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control col-md-4" required>{{ $book->deskripsi }}</textarea>
                                </div>
                                <div class="form-group row">
                                    <label for="penulis" class="col-md-4">Penulis</label>
                                    <input type="text" name="penulis" id="penulis" class="form-control col-md-4" value="{{ $book->penulis }}" required>
                                </div>
                                <div class="form-group row">
                                    <label for="penerbit" class="col-md-4">Penerbit</label>
                                    <input type="text" name="penerbit" id="penerbit" class="form-control col-md-4" value="{{ $book->penerbit }}" required>
                                </div>
                                <div class="form-group row">
                                    <label for="cover_img" class="col-md-4">Cover Image</label>
                                    <input type="text" name="cover_img" id="cover_img" class="form-control col-md-4" value="{{ $book->cover_img }}" required>
                                </div>
                                <div class="form-group row">
                                    <label for="genres_id" class="col-md-4">Genre</label>
                                    <select name="genres_id" id="genres_id" class="form-control col-md-4" required>
                                        <!-- Populate options dynamically -->
                                        @foreach($genres as $genre)
                                            <option value="{{ $genre->id }}" {{ $genre->id == $book->genres_id ? 'selected' : '' }}>{{ $genre->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="submit" value="Update" class="btn btn-primary">
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
