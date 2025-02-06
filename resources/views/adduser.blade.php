@extends('layouts.layout')

@section('title', 'Add User')

@section('content')
<div class="px-3">
    <div class="container-fluid">
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Add User</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
                            <li class="breadcrumb-item active">Add User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Form -->
        @if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Create New User</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="p-2">
                                    <form method="POST" action="{{ route('users.store') }}">
                                        @csrf

                                        <!-- Name -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label" for="name">Full Name</label>
                                            <div class="col-md-10">
                                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label" for="email">Email</label>
                                            <div class="col-md-10">
                                                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                            </div>
                                        </div>

                                        <!-- Designation -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label" for="designation">Designation</label>
                                            <div class="col-md-10">
                                                <input type="text" id="designation" name="designation" class="form-control" value="{{ old('designation') }}">
                                            </div>
                                        </div>

                                        <!-- Department -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label" for="department">Department</label>
                                            <div class="col-md-10">
                                                <input type="text" id="department" name="department" class="form-control" value="{{ old('department') }}">
                                            </div>
                                        </div>

                                        <!-- Location -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label" for="location">Location</label>
                                            <div class="col-md-10">
                                                <input type="text" id="location" name="location" class="form-control" value="{{ old('location') }}">
                                            </div>
                                        </div>

                                        <!-- Contact -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label" for="contact">Contact</label>
                                            <div class="col-md-10">
                                                <input type="text" id="contact" name="contact" class="form-control" value="{{ old('contact') }}">
                                            </div>
                                        </div>

                                        <!-- Role -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label" for="role">Role</label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="role" name="role" required>
                                                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                                                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                                    <option value="manager" {{ old('role') == 'manager' ? 'selected' : '' }}>Manager</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Password -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label" for="password">Password</label>
                                            <div class="col-md-10">
                                                <input type="password" id="password" name="password" class="form-control" required>
                                            </div>
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="mb-2 row">
                                            <label class="col-md-2 col-form-label" for="password_confirmation">Confirm Password</label>
                                            <div class="col-md-10">
                                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="mb-2 row">
                                            <div class="col-md-10 offset-md-2">
                                                <button type="submit" class="btn btn-primary">Create User</button>
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
