<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;

use Illuminate\Http\Request;
use App\Http\Requests\PostsStoreRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('posts.create', [

            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsStoreRequest $request)
    {
        $post->replicate();
        Post::create($request->all());        
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $post = Post::find($id);

        return view('posts.view', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // $post = Post::find($id);
        $users = User::all();

        return view('posts.edit', [
            'post' => $post,
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostsStoreRequest $request, Post $post)
    {
        $post->slug = null;
        $post->update($request->all());
        $post->replicate();

        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        dd('in ists');
        // $post = Post::find($id);
        $post->delete();
        return "true";
    }
}
