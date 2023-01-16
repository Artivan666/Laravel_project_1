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
                'title' => 'Title 4',
                'content' => 'Post 4',
                'image' => 'Image 4',
                'likes' => '85',
                'is_published' => '1'
            ],
            [
                'title' => 'Title 5',
                'content' => 'Post 5',
                'image' => 'Image 5',
                'likes' => '34',
                'is_published' => '1'
            ],
            [
                'title' => 'Title 6',
                'content' => 'Post 6',
                'image' => 'Image 6',
                'likes' => '327',
                'is_published' => '0'
            ],
        ];

        // Post::create([
        //     'title' => 'Title 7',
        //     'content' => 'Post 7',
        //     'image' => 'Image 7',
        //     'likes' => '85',
        //     'is_published' => '1'
        // ]);

        foreach($postsArr as $post) {
            Post::create($post);
        }

        dd('created');
    }

    public function update() {
        $post = Post::find(6);

        $post->update([
            'title' => 'Title updated 7',
            'content' => 'Post updated 7',
            'image' => 'Image updated 7',
            'likes' => '85',
            'is_published' => '1'
        ]);

        dd('updated');
    }

    public function delete() {
        // $post = Post::find(2);
        // $post->delete();

        $post = Post::withTrashed()->find(2);
        $post->restore();

        dd('deleted');
    }

    public function firstOrCreate() {
       $somePost = [
        'title' => 'Title 7',
        'content' => 'Post 7',
        'image' => 'Image 7',
        'likes' => '85',
        'is_published' => '1'
       ];

       $post = Post::firstOrCreate(['title' => 'Title 43'], $somePost);
       dump($post->title);
       dd('end');
    }

    public function updateOrCreate() {
        $somePost = [
            'title' => 'Title 8',
            'content' => 'Post 8',
            'image' => 'Image 8',
            'likes' => '85',
            'is_published' => '1'
           ];
        
        $post = Post::updateOrCreate(['title' => 'Title 8'], $somePost);
        dd($post->title);
    }
}
