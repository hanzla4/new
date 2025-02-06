@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a New Role</h1>

    <!-- Form to create a new role and assign permissions -->
    <form action="{{ route('admin.roles.store') }}" method="POST">
        @csrf

        <!-- Role Name Input -->
        <div class="form-group">
            <label for="role_name">Role Name</label>
            <input type="text" name="role_name" id="role_name" class="form-control" required>
        </div>

        <!-- Permissions Checkboxes -->
        <div class="form-group">
            <label for="permissions">Assign Permissions</label><br>
            @foreach ($permissions as $permission)
                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}">
                {{ $permission->name }}<br>
            @endforeach
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create Role</button>
    </form>
</div>
@endsection
