<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $tasks = Task::latest()->get();

        return view('dashboard', compact('userCount', 'tasks'));
    }
}
