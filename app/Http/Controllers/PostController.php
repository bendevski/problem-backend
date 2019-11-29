<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function all(){
        $tasks = Post::all();
        return response()->json($tasks);
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'content'=>'required'
        ]);

        $post = Post::create($request->all());
        $tasks = Post::all();
        return response()->json($tasks);
    }
    public function comment(Request $request, Post $post){
        $request->validate([
            'comment'=>'required'
        ]);
        $post->comments->append($request->comment);
        $tasks = Post::all();
        return response()->json($tasks);
    }
    public function like(Request $request, Post $post){
        $request->validate([
            'type'=>'required'
        ]);
        if ($request->type=='+'){
            $post->likes++;
        }
        else $post->likes--;
        $tasks = Post::all();
        return response()->json($tasks);
    }
}
