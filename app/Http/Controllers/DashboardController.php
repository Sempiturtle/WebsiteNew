<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $tasks = Task::all(); // ← ADD THIS

        return view('dashboard', compact('userCount', 'tasks'));
    }
}
