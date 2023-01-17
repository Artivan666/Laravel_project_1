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

      <div>
        <label for="category">Category</label>
        <select name="category_id" id="category">
          <option value="">-------</option>
          @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->title }}</option>
          @endforeach
        </select>
      </div>

      <div>
        <label for="tags">Tags</label>
        <select multiple name="tags[]" id="tags">
          @foreach($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->title }}</option>
          @endforeach
        </select>
      </div>

      <div><button type="submit">Create post</button></div>
    </form>
  </div>
@endsection