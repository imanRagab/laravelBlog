<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index(){

        $posts = Post::all();
        return view('posts.index', [
            'posts' => $posts
        ]);

    }
}