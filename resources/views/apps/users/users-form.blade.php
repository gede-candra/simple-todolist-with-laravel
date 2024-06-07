@extends('layouts.app')

@section('content')
    <h2 class="mt-3">{{ @$user ? 'Form Edit Data User' : 'Form Tambah Data User' }}</h2>
    <hr>
    <form class="mt-4 mx-auto" action="{{ $formAction }}" method="POST" style="max-width: 500px">
        @csrf
        @method($formMethod)
        <div class="mb-3 has-validation">
            <label for="inputName" class="form-label">Nama Lengkap</label>
            <input type="text" name="name" value="{{ old('name', @$user->name) }}" class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="Masukkan nama lengkap disini...">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3 has-validation">
            <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
            <input type="email" name="email" value="{{ old('email', @$user->email) }}" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Masukkan email disini...">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        @if (!@$user->id && @$user->id != auth()->user()->id)
        <div class="mb-4 has-validation">
            <label for="exampleInputRole1" class="form-label">Role</label>
            <select id="exampleInputRole1" name="role" class="form-select @error('role') is-invalid @enderror">
                <option disabled {{ @$user->role == null ? 'selected' : '' }}>Pilih Role</option>
                <option value="Creator" {{ @$user->role == 'Creator' || old('role') == 'Creator' ? 'selected' : '' }}>Creator</option>
                <option value="Editor" {{ @$user->role == 'Editor' || old('role') == 'Editor' ? 'selected' : '' }}>Editor</option>
                <option value="Publisher" {{ @$user->role == 'Publisher' || old('role') == 'Publisher' ? 'selected' : '' }}>Publisher</option>
            </select>
            @error('role')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        @endif
        <div class="mb-4 has-validation">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Masukkan password disini...">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4 has-validation">
            <label for="inputConfirmPassword" class="form-label">Konfirmasi Password</label>
            <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="inputConfirmPassword" placeholder="Masukkan konfirmasi password disini...">
            @error('confirm_password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-danger w-100">Simpan</button>
    </form>
@endsection
