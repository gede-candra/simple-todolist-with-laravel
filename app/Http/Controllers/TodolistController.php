<?php

namespace App\Http\Controllers;

use App\Models\TodoCategory;
use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'todolists' => Todolist::all(),
        ];

        return view('apps.todolist.todolist', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'todoCategories' => TodoCategory::all(),
            'formMethod'     => 'POST',
            'formAction'     => route('todolist.store'),
        ];

        return view('apps.todolist.todolist-form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'task'             => ['required'],
            'todo_category_id' => ['required'],
            'deadline'         => ['required'],
        ]);

        $credentials['user_id'] = auth()->user()->id;

        Todolist::create($credentials);

        return redirect('/todolist')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todolist $todolist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todolist $todolist)
    {
        $data = [
            'todolist'       => $todolist,
            'todoCategories' => TodoCategory::all(),
            'formMethod'     => 'PATCH',
            'formAction'     => route('todolist.update', ['todolist' => $todolist]),
        ];

        return view('apps.todolist.todolist-form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todolist $todolist)
    {
        $credentials = $request->validate([
            'task'             => ['required'],
            'todo_category_id' => ['required'],
            'deadline'         => ['required'],
        ]);

        $todolist->update($credentials);

        return redirect('/todolist')->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todolist $todolist)
    {
        $todolist->delete();
        return redirect('/todolist')->with('message', 'Data Berhasil Dihapus');
    }
}
