<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Fetch all users
    public function index()
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    // Show create user form
    public function create()
    {
        return view('users.create');
    }

    // Store new user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'designation' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'contact' => 'nullable|string|max:20',
            'role' => 'required|string|in:admin,user,manager',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'designation' => $request->designation,
            'department' => $request->department,
            'location' => $request->location,
            'contact' => $request->contact,
            'role' => $request->role,
            'password' => Hash::make($request->password), // Hash password
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    // Show user details
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    // Show edit form
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'designation' => 'nullable|string',
            'department' => 'nullable|string',
            'location' => 'nullable|string',
            'contact' => 'nullable|string',
            'role' => 'nullable|string',
            'password' => 'nullable|string|min:8', // Ensure password is hashed if updated
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->designation = $request->input('designation');
        $user->department = $request->input('department');
        $user->location = $request->input('location');
        $user->contact = $request->input('contact');
        $user->role = $request->input('role');

        // Only update password if it's provided
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('users.index')->with('success', 'User deleted successfully.');
        }

        return redirect()->route('users.index')->with('error', 'User not found.');
    }

}
