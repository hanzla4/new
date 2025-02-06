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

    public function addUserPage($user = null)
    {
        $user = $user ? User::findOrFail($user) : null;  // If a user is passed, get it, otherwise it's a new user.
        return view('adduser', compact('user'));  // Pass the user (or null for new user) to the view.
    }

 public function destroy($id)
{
    // Find the user by ID
    $user = User::find($id);

    // Proceed with deletion if user is found
    if ($user) {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

    // If user is not found, return an error message
    return redirect()->route('users.index')->with('error', 'User not found.');
}




public function update(Request $request, $id)
{
    dd($id);
    // Validate the incoming data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'department' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'contact' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'role' => 'required|in:admin,user',
    ]);

    // Find the user by ID
    $user = User::find($id);

    // If the user is not found
    if (!$user) {
        return redirect()->route('users.index')->with('error', 'User not found.');
    }

    // Update the user data
    $user->update($validatedData);

    // Debug: dd() to inspect the updated user data
    dd($user);  // This will dump the user object and stop further execution

    // Redirect back with success message (this line won't be executed if dd() is used)
    return redirect()->route('users.index')->with('success', 'User updated successfully.');
}

}




