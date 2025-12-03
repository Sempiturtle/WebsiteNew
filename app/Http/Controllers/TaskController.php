<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Display a listing of tasks with optional search
    public function index(Request $request)
    {
        $search = $request->input('search');

        $tasks = Task::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('description', 'like', "%{$search}%");
        })->latest()->get();

        return view('tasks.index', compact('tasks', 'search'));
    }

    // Show the form for creating a new task
    public function create()
    {
        return view('tasks.create');
    }

    // Store a newly created task
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
    ]);

    Task::create([
        'name' => $request->name,
        'description' => $request->description,
        'user_id' => auth()->id(), // Attach current user
    ]);

    return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
}

    // Show the form for editing the task
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Update the task
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task->update($request->only('name', 'description'));

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    // Delete a task
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
