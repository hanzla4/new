<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionController extends Controller
{
    // Middleware to ensure only admins can access this controller
    public function __construct()
    {
        $this->middleware('role:admin');
    }

    // Show form to create roles and permissions
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.createRole', compact('permissions'));
    }

    // Store the new role with selected permissions
    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|string|unique:roles,name',
            'permissions' => 'array',
        ]);

        // Create a new role
        $role = Role::create(['name' => $request->role_name]);

        // Attach selected permissions to the new role
        if ($request->permissions) {
            $role->syncPermissions($request->permissions);
        }

        return redirect()->route('admin.roles.index')->with('success', 'Role created successfully');
    }

    // Show all roles with assigned permissions
    public function index()
    {
        $roles = Role::with('permissions')->get();
        return view('admin.indexRoles', compact('roles'));
    }

    // Assign a role to a user
    public function assignRoleToUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role' => 'required|exists:roles,name',
        ]);

        $user = User::find($request->user_id);
        $user->assignRole($request->role);

        return back()->with('success', 'Role assigned to user successfully');
    }

    // Show permissions to edit and delete
    public function showPermissions()
    {
        $permissions = Permission::all();
        return view('admin.permissions', compact('permissions'));
    }

    // Add a new permission
    public function storePermission(Request $request)
    {
        $request->validate([
            'permission_name' => 'required|string|unique:permissions,name',
        ]);

        Permission::create(['name' => $request->permission_name]);

        return redirect()->route('admin.permissions.index')->with('success', 'Permission created successfully');
    }
}
