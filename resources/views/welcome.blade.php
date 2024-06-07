@extends('layouts.app')
@section('content')
    <div class="min-vh-100 d-flex align-items-center text-danger">
        <div class="container bg-light p-4 rounded-2" style="width: 400px; height: fit-content; box-shadow: 0 1rem 3rem rgba(220, 53, 69, 0.3);">
            <div class="text-center">
                <h3>To Do List</h3>
                <h5 class="text-secondary fst-italic">Silakan login ke akun Anda</h5>
            </div>
            <hr>
            @error('message')
                <div class="alert alert-danger mb-4" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <form class="mt-4" action="{{ route('auth') }}" method="POST">
                @csrf
                <div class="mb-3 has-validation">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Masukkan email disini...">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4 has-validation">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Masukkan password disini...">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-danger w-100">Login</button>
            </form>
            <footer class="mt-4">
                <p class="text-center text-secondary m-0 fst-italic">© 2024 by Candra Wijaya </p>
            </footer>
        </div>
    </div>
@endsection
