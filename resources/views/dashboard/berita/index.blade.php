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
              <a href="/dashboard/berita/create" class="btn btn-primary btn-block mb-3">Tambah berita</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">List Berita
                <a href="/dashboard/berita" class="btn btn-default btn-sm">
                  <i class="fas fa-sync-alt"></i>
                </a>
              </h3>

              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <thead>
                    <th>No.</th>
                    <th>Penulis</th>
                    <th>Judul</th>
                    <th>Waktu terbit</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="mailbox-name">{{ $post->author->nama }}</td>
                        <td class="mailbox-subject">{{ $post->title }}</td>
                        <td class="mailbox-date">{{ $post->updated_at->diffForHumans() }}</td>
                        <td>
                          <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                          <form action="/dashboard/berita/{{ $post->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-sm btn-danger border-0 padding-0" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></button>
                          </form>
                          <a href="/dashboard/berita/{{ $post->id }}" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <!-- /.btn-group -->
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-right"></i>
                    </button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    

@endsection