@extends('admin.layout')

@section('title', 'Create User')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Create User</h1>

<form action="{{ route('users.store') }}" method="POST">
    {{-- Laravel CSRF Protection --}}
    @csrf

    <div class="form-group">
        <label for="name">User Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter User Name" value="{{ old('name') }}">
        {{-- Error message untuk name --}}
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ old('email') }}">
        {{-- Error message untuk email --}}
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
        {{-- Error message untuk password --}}
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Create User</button>
</form>
@endsection
