@extends('main')
@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body text-center">
              <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Kembali ke Beranda</a>
                <h2>{{ $post->title }}</h2>
                <p><strong>Kategori:</strong> {{ $post->category->name }}</p>
                <p>{{ $post->content }}</p>
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" width="50%" class="img-fluid mt-3">
                @endif
            </div>
        </div>
    </div>
@endsection
