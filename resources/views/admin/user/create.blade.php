@extends('admin.layout')

@section('title', 'Create User')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Create User</h1>
<form action="#" method="POST">
    <div class="form-group">
        <label for="name">User Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter User Name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
    </div>
    <button type="submit" class="btn btn-primary">Create User</button>
</form>
@endsection
