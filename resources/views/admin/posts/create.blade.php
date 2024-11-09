@extends('admin.layout')

@section('title', 'Create Post')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Create Post</h1>

<!-- Form to Create Post -->
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter Post Title" value="{{ old('title') }}">
        
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="category_id">Category</label>
        <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        
        @error('category_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="user_id">Author</label>
        <select class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
            <option value="">Select Author</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
            @endforeach
        </select>
        
        @error('user_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="5" placeholder="Enter Post Content">{{ old('content') }}</textarea>
        
        @error('content')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Create Post</button>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
