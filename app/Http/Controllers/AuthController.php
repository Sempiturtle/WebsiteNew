<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; // Add this for authentication

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect('/')->with('success', 'Registration successful');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function LoginUser(Request $request)
    {
        // Validate the login data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication successful, redirect the user to the homepage or dashboard
            return redirect()->intended('/dashboard')->with('success', 'You are logged in!');
        } else {
            // Authentication failed, return with an error message
            return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
        }
    }
}
