@extends('layouts.main')

@section('component')

<div class="row justify-content-center mt-5">
    <div class="col-md-4">

        @if (session()->has('success'))
            
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endif

        @if (session()->has('loginError'))
            
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endif

        <main class="form-signin w-100 m-auto">
            <form action="/login" method="POST">
                @csrf
                <img class="mb-4 d-block mx-auto" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
            
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="floatingEmail" autofocus required>
                    <label for="floatingEmail">Email</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" required>
                    <label for="floatingPassword">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
            </form> 
        </main>

    </div>
</div>

@endsection