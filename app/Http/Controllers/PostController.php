<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('post.create');
    }

    public function store(){
        $data = request()->validate(
            ['title'=>'required', 'content'=>'required']
        );
        $post = auth()->user()->posts()->create($data);
            return redirect('/posts/'.$post->id);
    }

    public function show(Post $post){
        return view('post.show',compact('post'));
    }
}
