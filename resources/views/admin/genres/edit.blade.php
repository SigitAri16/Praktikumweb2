@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Genre</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin')}}">Home</a></li>
                <li class="breadcrumb-item active">Edit Genre</li>
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
                 
                  <a href="{{ route('genres.index') }}" class="btn btn-success btn-sm">Kembali</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form action="{{ route('genres.store')  }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>
                        <input type="hidden" name="id" value="{{ $genres->id }}">
                        <div class="col-md-6">
                            <input type="text" value="{{ $genres->name }}" name="name" id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Perbaharui</button>
                        </div>
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
