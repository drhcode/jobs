<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show register form
    public function register()
    {
        return view('users.register');
    }

    // Create new user 
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required | confirmed | min:6'
        ]);

        // Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // create user
        $user = User::create($formFields);

        // Login user
        auth()->login($user);

        return redirect('/')->with('success', 'User created successfully and logged in');
    }

    // Log out users
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session->invalidate();
        $request->session->regenerateToken();


        return redirect('/')->with('success', 'You have been logged out');
    }

    // Show login form
    public function login()
    {
        return view('users.login');
    }

    // Authenticate user 
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'User logged in successful');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }
}
