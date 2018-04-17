<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostsStoreRequest;
use App\Http\Resources\PostResource;


class PostsController extends Controller
{
    public function index(){

        return PostResource::collection(Post::with('user')->paginate(1));

    }

    public function store(PostsStoreRequest $request){

        return new PostResource(Post::create($request->except(['slug'])));
        
    }
}
