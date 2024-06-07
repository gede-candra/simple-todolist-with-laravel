<?php

namespace App\Http\Controllers;

use App\Models\TodoCategory;
use Illuminate\Http\Request;

class TodoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'todoCategories' => TodoCategory::all(),
        ];

        return view('apps.todo-categories.todo-categories', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'formMethod' => 'POST',
            'formAction' => route('kategori-todo.store'),
        ];

        return view('apps.todo-categories.todo-categories-form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
        ]);

        TodoCategory::create($credentials);

        return redirect('/kategori-todo')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(TodoCategory $todoCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todoCategory = TodoCategory::find($id);

        $data = [
            'todoCategory' => $todoCategory,
            'formMethod'   => 'PATCH',
            'formAction'   => route('kategori-todo.update', ['kategori_todo' => $todoCategory->id]),
        ];

        return view('apps.todo-categories.todo-categories-form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credentials = $request->validate([
            'name'             => ['required'],
        ]);

        TodoCategory::find($id)->update($credentials);

        return redirect('/kategori-todo')->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TodoCategory::find($id)->delete();
        return redirect('/kategori-todo')->with('message', 'Data Berhasil Dihapus');
    }
}
