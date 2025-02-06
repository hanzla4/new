@extends('layouts.layout')

@section('title', 'Admin Dashboard')

@section('content')

<div class="px-3">
    <div class="container-fluid">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">User Table</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive" style="overflow-x:auto;">
                            <table id="user-table" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Department</th>
                                        <th>Location</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $index => $user)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->designation }}</td>
                                        <td>{{ $user->department }}</td>
                                        <td>{{ $user->location }}</td>
                                        <td>{{ $user->contact }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ ucfirst($user->role) }}</td>
                                        <td class="text-center">
                                            <!-- Edit Button -->
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#edit-user-modal" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-designation="{{ $user->designation }}" data-department="{{ $user->department }}" data-location="{{ $user->location }}" data-contact="{{ $user->contact }}" data-email="{{ $user->email }}" data-role="{{ $user->role }}">Edit</button>
                                        </td>
                                        <td class="text-center">
                                            <!-- Delete Button -->
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="edit-user-modal" tabindex="-1" aria-labelledby="edit-user-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-user-modal-label">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="edit-user-form" method="POST" action="{{ route('users.update', 0) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="edit-name">Name</label>
                        <input type="text" id="edit-name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="edit-designation">Designation</label>
                        <input type="text" id="edit-designation" name="designation" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="edit-department">Department</label>
                        <input type="text" id="edit-department" name="department" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="edit-location">Location</label>
                        <input type="text" id="edit-location" name="location" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="edit-contact">Contact</label>
                        <input type="text" id="edit-contact" name="contact" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="edit-email">Email</label>
                        <input type="email" id="edit-email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="edit-role">Role</label>
                        <select id="edit-role" name="role" class="form-control" required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // DataTable initialization
        $('#user-table').DataTable({
            responsive: true,
            scrollX: true
        });

        // Edit button click handler to populate the modal form with user data
        $('#edit-user-modal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            var name = button.data('name');
            var designation = button.data('designation');
            var department = button.data('department');
            var location = button.data('location');
            var contact = button.data('contact');
            var email = button.data('email');
            var role = button.data('role');

            var modal = $(this);
            modal.find('#edit-name').val(name);
            modal.find('#edit-designation').val(designation);
            modal.find('#edit-department').val(department);
            modal.find('#edit-location').val(location);
            modal.find('#edit-contact').val(contact);
            modal.find('#edit-email').val(email);
            modal.find('#edit-role').val(role);

            // Update the form action to point to the correct user ID
            modal.find('#edit-user-form').attr('action', '/users/' + id);  // Ensure that this is dynamically updated
        });
    });
</script>
@endsection
