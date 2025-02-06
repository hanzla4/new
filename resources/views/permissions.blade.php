@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Permissions</h1>
    <form action="{{ route('admin.permissions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="permission_name">Permission Name</label>
            <input type="text" name="permission_name" id="permission_name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Permission</button>
    </form>

    <h2>Existing Permissions</h2>
    <ul>
        @foreach ($permissions as $permission)
            <li>{{ $permission->name }}</li>
        @endforeach
    </ul>
</div>
@endsection
