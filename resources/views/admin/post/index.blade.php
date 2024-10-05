@extends('admin.layout')

@section('title', 'Post List')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Post List</h1>

<!-- Button to Add New Post -->
<a href="{{ url('/post/create') }}" class="btn btn-primary mb-4">Add New Post</a>

<!-- Table to Show Post List -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Posts</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Post 1</td>
                        <td>Category 1</td>
                        <td>
                            <a href="{{ url('/post/edit/1') }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Post 2</td>
                        <td>Category 2</td>
                        <td>
                            <a href="{{ url('/post/edit/2') }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
