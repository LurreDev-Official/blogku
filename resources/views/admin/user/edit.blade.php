@extends('admin.layout')

@section('title', 'Edit User')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Edit User</h1>
<form action="#" method="POST">
    <div class="form-group">
        <label for="name">User Name</label>
        <input type="text" class="form-control" id="name" name="name" value="John Doe">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="johndoe@example.com">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password if you want to change">
    </div>
    <button type="submit" class="btn btn-primary">Update User</button>
</form>
@endsection
