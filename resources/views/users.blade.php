@extends('layouts.layout')

@section('title', 'Admin Dashboard')

@section('content')

<div class="px-3">
    <div class="container-fluid">
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
                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#edit-modal" onclick="setEditUserDetails({{ $user->id }})">Edit</button>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal" onclick="setDeleteUserId({{ $user->id }})">Delete</button>
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
<div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="edit-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="edit-modal-label">Edit User Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="edit-form" action="{{ route('users.update', 'userId') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="edit-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="edit-name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-designation" class="form-label">Designation</label>
                        <input type="text" class="form-control" id="edit-designation" name="designation" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-department" class="form-label">Department</label>
                        <input type="text" class="form-control" id="edit-department" name="department" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="edit-location" name="location" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-contact" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="edit-contact" name="contact" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="edit-email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-role" class="form-label">Role</label>
                        <select class="form-select" id="edit-role" name="role" required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="delete-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title text-danger" id="delete-modal-label">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-dark">Are you sure you want to delete this user? This action is permanent.</p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="delete-form" action="{{ route('users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    let deleteUserId = null;
    let editUserId = null;

    // Set the user ID dynamically in the form action for delete
    function setDeleteUserId(userId) {
        deleteUserId = userId;
        const form = document.getElementById('delete-form');
        form.action = '/users/' + userId;  // Adjust the URL if necessary
    }

    // Set the user details dynamically for edit modal
    function setEditUserDetails(userId) {
        // Get the user data based on the userId (you can use AJAX for this or pass data via the controller)
        editUserId = userId;

        // Adjust the form action URL
        const form = document.getElementById('edit-form');
        form.action = '/users/' + userId;

        // Fetch the user data and populate the fields (this part needs to be handled on the backend or via JavaScript/AJAX)
        // For now, you can populate the fields manually or use an AJAX request to get user details
        // Example data (replace with real data)
        document.getElementById('edit-name').value = 'John Doe';
        document.getElementById('edit-designation').value = 'Software Developer';
        document.getElementById('edit-department').value = 'Engineering';
        document.getElementById('edit-location').value = 'New York';
        document.getElementById('edit-contact').value = '1234567890';
        document.getElementById('edit-email').value = 'john.doe@example.com';
        document.getElementById('edit-role').value = 'user'; // or 'admin'
    }

    $(document).ready(function() {
        $('#user-table').DataTable({
            responsive: true,
            scrollX: true
        });
    });
</script>
@endsection
