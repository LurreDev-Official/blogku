@extends('admin.layout')

@section('title', 'Create Category')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Create New Category</h1>

<!-- Form for creating a new category -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Category</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter category name" value="{{ old('name') }}">
                
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Category</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
