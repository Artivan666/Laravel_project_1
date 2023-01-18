<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Post;

class DestroyController extends Controller
{
    // как только из роута обратимся к этому классу,
    // первое что произойдет, будет запущен это метод
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
