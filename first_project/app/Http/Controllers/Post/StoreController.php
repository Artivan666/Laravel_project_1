<?php

namespace App\Http\Controllers\Post;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Post;
use App\Tag;

class StoreController extends BaseController
{
    // как только из роута обратимся к этому классу,
    // первое что произойдет, будет запущен это метод
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        
        $this->service->store($data);
        
        return redirect()->route('post.index');
    }
}
