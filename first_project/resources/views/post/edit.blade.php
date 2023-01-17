@extends('layouts.base')
@section('content')
  <div>
    <form action="{{ route('post.update', $post->id) }}" method="post">
      @csrf
      @method('patch')
      <div>
      <label for="title">Title</label>
      <input type="text" name="title" value='{{ $post->title }}' id="">
      </div>

      <div>
      <label for="content">Content</label>
      <textarea type="text" name="content" id="">{{ $post->content }}</textarea>
      </div>

      <div>
      <label for="image">Image</label>
      <input type="text" name="image" value='{{ $post->image }}' id="">
      </div>

      <div><button type="submit">Update</button></div>
    </form>
  </div>
@endsection