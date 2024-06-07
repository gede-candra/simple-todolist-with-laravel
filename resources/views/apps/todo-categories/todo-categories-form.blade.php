@extends('layouts.app')

@section('content')
    <h2 class="mt-3">{{ @$todoCategory ? 'Form Edit Kategori Todo' : 'Form Tambah Kategori Todo' }}</h2>
    <hr>
    <form class="mt-4 mx-auto" action="{{ $formAction }}" method="POST" style="max-width: 500px">
        @csrf
        @method($formMethod)
        <div class="mb-3 has-validation">
            <label for="inputName" class="form-label">Nama Kategori</label>
            <input type="text" name="name" value="{{ old('name', @$todoCategory->name) }}" class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="Masukkan nama lengkap disini...">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-danger w-100">Simpan</button>
    </form>
@endsection
