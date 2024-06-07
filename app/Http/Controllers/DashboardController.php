<?php

namespace App\Http\Controllers;

use App\Models\TodoCategory;
use App\Models\Todolist;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $data = [
            'users'          => User::count(),
            'todoCategories' => TodoCategory::count(),
            'todolist'       => Todolist::count(),
        ];

        return view('apps.dashboard', $data);
    }
}
