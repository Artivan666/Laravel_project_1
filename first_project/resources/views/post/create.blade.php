@extends('layouts.base')
@section('content')
  <div>
    <form action="{{ route('post.store') }}" method="post">
      @csrf
      <div>
      <label for="title">Title</label>
      <input type="text" name="title" id="">
      </div>

      <div>
      <label for="content">Content</label>
      <textarea type="text" name="content" id=""></textarea>
      </div>

      <div>
      <label for="image">Image</label>
      <input type="text" name="image" id="">
      </div>

      <div><button type="submit">Create post</button></div>
    </form>
  </div>
@endsection