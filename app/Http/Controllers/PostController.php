<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Http\Requests\PostValidation;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function getList(): array
    {
        $posts = Post::with('website')->get();

        return [
            'posts' => PostResource::collection($posts)
        ];
    }

    public function store(PostValidation $request): void
    {
        $post = Post::create($request->validated());

        PostCreated::dispatch($post);
    }
}
