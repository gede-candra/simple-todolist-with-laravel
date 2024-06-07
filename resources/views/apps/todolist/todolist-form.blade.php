@extends('layouts.app')

@section('content')
    <h2 class="mt-3">{{ @$todolist ? 'Form Edit Todolist' : 'Form Tambah Todolist' }}</h2>
    <hr>
    <form class="mt-4 mx-auto" action="{{ $formAction }}" method="POST" style="max-width: 500px">
        @csrf
        @method($formMethod)
        <div class="mb-3 has-validation">
            <label for="inputTask" class="form-label">Task</label>
            <input type="text" name="task" value="{{ old('task', @$todolist->task) }}" class="form-control @error('task') is-invalid @enderror" id="inputTask" placeholder="Masukkan judul task disini...">
            @error('task')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4 has-validation">
            <label for="exampleInputTodoCategoryId1" class="form-label">Kategori Todo</label>
            <select id="exampleInputTodoCategoryId1" name="todo_category_id" class="form-select @error('todo_category_id') is-invalid @enderror">
                <option disabled {{ @$todolist->todo_category_id == null ? 'selected' : '' }}>Pilih Kategori Todo</option>
                @foreach ($todoCategories as $todoCategory)
                    <option value="{{ $todoCategory->id }}" {{ old('todo_category_id', @$todolist->todo_category_id) == $todoCategory->id ? 'selected' : '' }}>{{ $todoCategory->name }}</option>
                @endforeach
            </select>
            @error('todo_category_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3 has-validation">
            <label for="inputDeadline" class="form-label">Tanggal Deadline</label>
            <input type="date" name="deadline" value="{{ old('deadline', @$todolist->deadline) }}" class="form-control @error('deadline') is-invalid @enderror" id="inputDeadline" placeholder="Masukkan tanggal deadline disini...">
            @error('deadline')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-danger w-100">Simpan</button>
    </form>
@endsection
