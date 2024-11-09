@extends('admin.layout')

@section('title', 'Category List')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Category List</h1>

<!-- Button to Add New Category -->
<a href="{{ route('kategori.create') }}" class="btn btn-primary mb-4">Add New Category</a>

<!-- Table to Show Category List -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                    <tr>
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->name }}</td>
                        <td>
                            <a href="{{ route('kategori.edit', $categorie->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            {{-- Button untuk delete user --}}
                            <button class="btn btn-danger btn-sm" onclick="deleteUser('{{ $categorie->id }}')">Delete</button>
                            
                            {{-- Formulir untuk delete user (disembunyikan) --}}
                            <form id="delete-form-{{ $categorie->id }}" action="{{ route('kategori.destroy', $categorie->id) }}" method="POST" style="display: none;">
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
@endsection
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
