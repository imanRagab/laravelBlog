<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostsStoreRequest;

class PostsController extends Controller
{
    public function index(){

        return Post::with('user')->paginate(1);

    }

    public function store(PostsStoreRequest $request){

        return Post::create($request->except(['slug']));
        
    }
}
