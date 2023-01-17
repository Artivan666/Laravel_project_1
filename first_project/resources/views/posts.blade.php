<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>
</head>
<body>
  <h1>Posts</h1>
  <div>
    @foreach($posts as $post)
      <h2>{{ $post->title }}</h2>
      <p>{{ $post->content }}</p>
      <hr>
    @endforeach
  </div>
</body>
</html>