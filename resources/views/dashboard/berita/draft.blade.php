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
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">5 mins ago</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check2">
                        <label for="check2"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">28 mins ago</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check3">
                        <label for="check3"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">11 hours ago</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check4">
                        <label for="check4"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">15 hours ago</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check5">
                        <label for="check5"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">Yesterday</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check6">
                        <label for="check6"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">2 days ago</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check7">
                        <label for="check7"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">2 days ago</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check8">
                        <label for="check8"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">2 days ago</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check9">
                        <label for="check9"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">2 days ago</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check10">
                        <label for="check10"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">2 days ago</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check11">
                        <label for="check11"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">4 days ago</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check12">
                        <label for="check12"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">12 days ago</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check13">
                        <label for="check13"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">12 days ago</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check14">
                        <label for="check14"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">14 days ago</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check15">
                        <label for="check15"></label>
                      </div>
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-date">15 days ago</td>
                    <td>
                      <a href="/dashboard/berita/show/id" class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                      <a href="/dashboard/berita/id" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                      <a href="/dashboard/berita/status" class="btn-sm btn-warning"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
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