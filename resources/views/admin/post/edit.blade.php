@extends('admin.layout')

@section('title', 'Edit Post')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Post</h1>

<!-- Form to Edit Post -->
<form action="#" method="POST">
    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" id="title" name="title" value="Post 1">
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" id="category" name="category">
            <option value="1" selected>Category 1</option>
            <option value="2">Category 2</option>
        </select>
    </div>
    <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control" id="content" name="content" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update Post</button>
</form>
@endsection
