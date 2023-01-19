@extends('layouts.base')
@section('content')
  <div>
    @foreach($posts as $post)
      <a href="{{ route('post.show', $post->id) }}"><h2>{{ $post->id }} . {{ $post->title }}</h2></a>
      <hr>
    @endforeach
    <div>
      {{ $posts->links()}}
    </div>
  </div>
@endsection