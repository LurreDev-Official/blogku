@extends('main')

@php
  $posts = [
    [
      'title' => 'Judul Post 1',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.'
    ],
    [
      'title' => 'Judul Post 2',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.'
    ],
    [
      'title' => 'Judul Post 3',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.'
    ]
  ];
@endphp


@section('content')
    <H1>SELAMAT DATANG</H1>
        <div class="row">
          @foreach ($posts as $post)
            <div class="col-md-4 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $post['title'] }}</h5>
                  <p class="card-text">{{ Str::limit($post['content'], 100) }}</p>
                  <a href="{{ url('detailpost')}}" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
@endsection