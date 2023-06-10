<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostRequest;
use App\Http\Resources\BlogPostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return BlogPostResource::collection($posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogPostRequest $request)
    {
        $posts = Post::create($request->all());
        return new BlogPostResource($posts);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return BlogPostResource::make($post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogPostRequest $request, Post $post)
    {
        $post->update($request->all());
        return new BlogPostResource($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post ->delete();
        return response(null, 204);
    }
}
