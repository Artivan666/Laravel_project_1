@extends('layouts.base')
@section('content')
  <div>
    @foreach($posts as $post)
      <h2>{{ $post->title }}</h2>
      <p>{{ $post->content }}</p>
      <hr>
    @endforeach
  </div>
@endsection