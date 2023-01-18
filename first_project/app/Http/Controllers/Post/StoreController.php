<?php

namespace App\Http\Controllers\Post;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Post;
use App\Tag;

class StoreController extends Controller
{
    // как только из роута обратимся к этому классу,
    // первое что произойдет, будет запущен это метод
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
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

        $tags = Tag::all();

        return view('post.edit', compact('post', 'categories', 'tags'));
    }
}
