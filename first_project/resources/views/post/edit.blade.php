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

      <div>
        <label for="category">Category</label>
        <select name="category_id" id="category">
          @foreach($categories as $category)
          
          <option
            {{ $category->id === $post->category_id ? ' selected' : '' }} 
            value="{{ $category->id }}">{{ $category->title }}
          </option>
          @endforeach
        </select>
      </div>

      <div>
        <label for="tags">Tags</label>
        <select multiple name="tags[]" id="tags">
          @foreach($tags as $tag)
            <option
              @foreach($post->tags as $postTag)
                {{ $tag->id === $postTag->id ? ' selected' : '' }}
              @endforeach
             value="{{ $tag->id }}">{{ $tag->title }}</option>
          @endforeach
        </select>
      </div>

      <div><button type="submit">Update</button></div>
    </form>
  </div>
@endsection