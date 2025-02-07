@extends('layouts.layout')

@section('title', 'Edit User')

@section('content')

<div class="px-3">
    <div class="container-fluid">
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Edit User</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="#">Users</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Edit Form -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Edit User Details</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="p-2">
                                    <form method="POST" action="{{ route('users.update', $user->id) }}">
                                        @csrf
                                        @method('PUT')

                                        <!-- Name -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label">Full Name</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                            </div>
                                        </div>

                                        <!-- Designation -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label">Designation</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="designation" value="{{ $user->designation }}">
                                            </div>
                                        </div>

                                        <!-- Department -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label">Department</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="department" value="{{ $user->department }}">
                                            </div>
                                        </div>

                                        <!-- Location -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label">Location</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="location" value="{{ $user->location }}">
                                            </div>
                                        </div>

                                        <!-- Contact -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label">Contact</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="contact" value="{{ $user->contact }}">
                                            </div>
                                        </div>

                                        <!-- Role -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label">Role</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="role">
                                                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                                    <option value="manager" {{ $user->role == 'manager' ? 'selected' : '' }}>Manager</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="mb-2 row">
                                            <div class="col-md-10 offset-md-2">
                                                <button type="submit" class="btn btn-success">Update User</button>
                                                <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div> <!-- end card -->
            </div><!-- end col -->
        </div>
        <!-- end row -->
    </div>
</div>
@endsection
