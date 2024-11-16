@extends('main')


@section('content')
    <H1>SELAMAT DATANG</H1>
        <div class="row">

          @foreach ($posts as $post)
            <div class="col-md-4 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $post['title'] }}</h5>
                  @if ($post->image)
                  <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid mt-3" width="85%">
                  @endif
                  <p class="card-text">{{ Str::limit($post['content'], 100) }}</p>
                  <a href="{{ url('detailpost', $post['id'] )}}" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
          @endforeach

        </div>
@endsection