<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\PostTag;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();


        return view('post.index', compact('posts'));
    }

    public function create() {
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.create', compact('categories', 'tags'));
    }

    public function store() {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => ''
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        
        $post = Post::create($data);

        // foreach($tags as $tag) {
        //     PostTag::firstOrCreate([
        //         'tag_id' => $tag,
        //         'post_id' => $post->id
        //     ]);
        // }

        // another way
        $post->tags()->attach($tags);
        
        return redirect()->route('post.index');
    }

    // old method
    // public function show($id) {
    //     $post = Post::findOrFail($id);
    //     dd($post->title);
    // }

    public function show(Post $post) {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post) {
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories'));
    }

    public function update(Post $post) {
        $data =     request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            // 'category_id' => ''
        ]);
        
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('post.index');
    }

    // public function update() {
    //     $post = Post::find(6);

    //     $post->update([
    //         'title' => 'Title updated 7',
    //         'content' => 'Post updated 7',
    //         'image' => 'Image updated 7',
    //         'likes' => '85',
    //         'is_published' => '1'
    //     ]);

    //     dd('updated');
    // }

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
