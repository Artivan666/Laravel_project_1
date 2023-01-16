<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $post = Post::where('is_published', 0)->first();
       dump($post->title);
        dd('end');
    }

    public function create() {
        $postsArr = [
            [
                'title' => 'Title 7',
                'content' => 'Post 7',
                'image' => 'Image 7',
                'likes' => '85',
                'is_published' => '1'
            ],
            [
                'title' => 'Title 8',
                'content' => 'Post 8',
                'image' => 'Image 8',
                'likes' => '34',
                'is_published' => '1'
            ],
            [
                'title' => 'Title 9',
                'content' => 'Post 9',
                'image' => 'Image 9',
                'likes' => '327',
                'is_published' => '1'
            ],
        ];

        Post::create([
            'title' => 'Title 7',
            'content' => 'Post 7',
            'image' => 'Image 7',
            'likes' => '85',
            'is_published' => '1'
        ]);

        dd('created');
    }
}
