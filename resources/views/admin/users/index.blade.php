@extends('admin.layout')

@section('title', 'Users')

@section('content')
<h1 class="h3 mb-4 text-gray-800">User List</h1>
<a href="{{ route('users.create') }}" class="btn btn-primary mb-4">Add New User</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Users</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Loop melalui semua user --}}
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                
                                {{-- Button untuk delete user --}}
                                <button class="btn btn-danger btn-sm" onclick="deleteUser('{{ $user->id }}')">Delete</button>
                                
                                {{-- Formulir untuk delete user (disembunyikan) --}}
                                <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- SweetAlert Script --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function deleteUser(userId) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Submit the form
            document.getElementById('delete-form-' + userId).submit();
        }
    })
}
</script>
@endsection