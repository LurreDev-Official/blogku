@extends('admin.layout')

@section('title', 'Edit Category')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Category</h1>

<!-- Form to Edit Category -->
<form action="#" method="POST">
    <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" class="form-control" id="name" name="name" value="Category 1">
    </div>
    <button type="submit" class="btn btn-primary">Update Category</button>
</form>
@endsection
