<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'users' => User::all(),
        ];

        return view('apps.users.users', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'formMethod' => 'POST',
            'formAction' => route('users.store'),
        ];

        return view('apps.users.users-form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name'             => ['required'],
            'email'            => ['required', 'email', 'unique:users,email'],
            'role'             => ['required'],
            'password'         => ['required'],
            'confirm_password' => ['required', 'same:password'],
        ]);

        User::create($credentials);

        return redirect('/users')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $data = [
            'user'       => $user,
            'formMethod' => 'PATCH',
            'formAction' => route('users.update', ['user' => $user]),
        ];

        return view('apps.users.users-form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $credentials = $request->validate([
            'name'             => ['required'],
            'email'            => ['required', 'email'],
            'role'             => 'required',
            'password'         => 'nullable',
            'confirm_password' => ['same:password'],
        ]);


        unset($credentials['confirm_password']);
        if ($credentials['password'] == null) {
            unset($credentials['password']);
        }

        $user->update($credentials);

        return redirect('/users')->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users')->with('message', 'Data Berhasil Dihapus');
    }
}
