@extends('admin.layout')

@section('title', 'Edit User')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Edit User</h1>

{{-- Pastikan form mengarah ke route yang benar dan tambahkan CSRF protection --}}
<form action="{{ route('users.update', $user->id) }}" method="POST">
    {{-- Laravel CSRF Protection --}}
    @csrf
    {{-- Method spoofing untuk PUT --}}
    @method('PUT')

    <div class="form-group">
        <label for="name">User Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
        {{-- Error message untuk name --}}
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
        {{-- Error message untuk email --}}
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password if you want to change">
        {{-- Error message untuk password --}}
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update User</button>
</form>
@endsection
