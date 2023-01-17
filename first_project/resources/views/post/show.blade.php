@extends('layouts.base')
@section('content')
  <div>
      <h2>{{ $post->id }} . {{ $post->title }}</h2>
      <p>{{ $post->content }}</p>
  </div>
  <div>
    <a href="{{ route('post.edit', $post->id) }}">Edit</a>
  </div>
  <div>
    <form action="{{ route('post.delete', $post->id) }}" method="post">
      @csrf
      @method('delete')
      <input type="submit" value='Delete this' name="" id="">
    </form>
  </div>
@endsection