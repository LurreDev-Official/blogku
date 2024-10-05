@extends('admin.layout')

@section('title', 'Create Post')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Create Post</h1>

<!-- Form to Create Post -->
<form action="#" method="POST">
    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Post Title">
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" id="category" name="category">
            <option value="1">Category 1</option>
            <option value="2">Category 2</option>
        </select>
    </div>
    <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter Post Content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
@endsection
