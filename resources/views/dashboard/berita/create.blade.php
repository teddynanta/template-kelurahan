@extends('dashboard.layouts.main')
@section('dashboard')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ $title }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="/dashboard/berita" class="btn btn-primary btn-block mb-3">Kembali</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Buat berita baru</h3>
              </div>
              <!-- /.card-header -->
              <form action="/dashboard/posts" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group mb-2">
                    <select class="form-select" name="category_id" placeholder="Kategori">
                      <option value="" disabled selected hidden>Pilih Kategori</option>
                      <option value="1">Berita Kelurahan</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{ @old('title') }}" required placeholder="Judul">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                  </div>
                  <div class="form-group">
                    <textarea name="content" value="{{ @old('content') }}"></textarea>
                    <script>
                            CKEDITOR.replace( 'content' );
                    </script>
                  </div>
                </div>

              <!-- /.card-body -->
                <div class="card-footer">
                  <div class="float-right">
                    <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                  </div>
                </div>
              </form>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
