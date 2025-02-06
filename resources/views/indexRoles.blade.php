@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Roles and Permissions</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Role Name</th>
                <th>Permissions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>
                        @foreach ($role->permissions as $permission)
                            <span class="badge badge-info">{{ $permission->name }}</span>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
