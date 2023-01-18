<?php

namespace App\Http\Controllers\Post;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;

class EditController extends Controller
{
    // как только из роута обратимся к этому классу,
    // первое что произойдет, будет запущен это метод
    public function __invoke(Post $post)
    {
        $categories = Category::all();

        $tags = Tag::all();

        return view('post.edit', compact('post', 'categories', 'tags'));
    }
}
