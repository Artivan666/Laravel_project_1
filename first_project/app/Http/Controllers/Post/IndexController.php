<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Post;

class IndexController extends Controller
{
    // как только из роута обратимся к этому классу,
    // первое что произойдет, будет запущен это метод
    public function __invoke()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }
}
