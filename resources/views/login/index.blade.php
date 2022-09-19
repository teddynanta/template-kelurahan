@extends('layouts.main')

@section('component')

<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <main class="form-signin w-100 m-auto">
            @if (session()->has('loginError'))
                
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif
            <div class="login-box">
            <!-- /.login-logo -->
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                    <a class="h1">Kelurahan X</a>
                    </div>
                    <div class="card-body">
                    <p class="login-box-msg">Silahkan login untuk melanjutkan</p>

                    <form action="/login" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        </div>
                        <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                        </div>
                    </form>

                    <p class="mt-2 mb-0 text-center">
                        <h6 class="text-muted font-italic fs-6 text-center pt-3 pb-0">Ganti password anda secara berkala</h6>
                    </p>
                    </div>
                    <!-- /.card-body -->
                </div>
            <!-- /.card -->
            </div>
            <!-- /.login-box -->
        </main>
    </div>
</div>

@endsection